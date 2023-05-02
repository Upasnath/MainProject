import os
import numpy as np
from tkinter import Image
from flask import Flask, request, jsonify
from tensorflow.keras.models import load_model
from werkzeug.utils import secure_filename

UPLOAD_FOLDER = 'uploads'
ALLOWED_EXTENSIONS = {'png', 'jpg', 'jpeg', 'gif'}

app = Flask(__name__)
app.config['UPLOAD_FOLDER'] = UPLOAD_FOLDER

# Define function to check if file extension is allowed
def allowed_file(filename):
    return '.' in filename and filename.rsplit('.', 1)[1].lower() in ALLOWED_EXTENSIONS

# Define function to predict animal breed based on image file and animal type
def make_prediction(animal_type, file):
    # Load trained CNN model and weights
    # Code for this depends on your specific CNN model architecture and training code
    # Here, we'll assume you have a trained model saved in a file called 'model.h5'
    model = load_model('Model_nasnet.h5')
    
    # Preprocess image file for prediction
    img = Image.open(file.stream)
    img = img.resize((224, 224))
    img = img.convert('RGB')
    img_array = np.array(img)
    img_array = img_array / 255.0
    img_array = np.expand_dims(img_array, axis=0)
    
    # Make a prediction based on the animal type and the uploaded file
    if animal_type == '1':
        # Load dog breed labels
        labels = ['Labrador', 'Pomeranian', 'Siberian Husky']
        prediction = model.predict(img_array)
        breed_idx = np.argmax(prediction)
        breed = labels[breed_idx]
        confidence = prediction[0][breed_idx]
        
    elif animal_type == '2':
        # Load cat breed labels
        labels = ['Siamese', 'Persian', 'Sphynx']
        prediction = model.predict(img_array)
        breed_idx = np.argmax(prediction)
        breed = labels[breed_idx]
        confidence = prediction[0][breed_idx]
    
    elif animal_type == '4':
        # Load rabbit breed labels
        labels = ['Holland Lop', 'Mini Rex', 'Lionhead']
        prediction = model.predict(img_array)
        breed_idx = np.argmax(prediction)
        breed = labels[breed_idx]
        confidence = prediction[0][breed_idx]
    
    else:
        # Animal type not recognized
        breed = None
        confidence = None
    
    # Return prediction as JSON response
    response = {'animal_type': animal_type, 'breed': breed, 'confidence': confidence}
    return jsonify(response)

# Define API endpoint to receive image file and animal type, and return prediction
@app.route('/predict/', methods=['POST'])
def predict():
    animal_type = request.form.get('animal_type')
    # Check if the post request has the file part
    if 'file' not in request.files:
        return jsonify({'error': 'No file found'})
    
    # Get the file from the request
    file = request.files['file']
    
    # Check if file extension is allowed
    if not allowed_file(file.filename):
        return jsonify({'error': 'File type not allowed'})
    
    # Save file to uploads folder
    filename = secure_filename(file.filename)
    file.save(os.path.join(app.config['UPLOAD_FOLDER'], filename))
    
    # Make a prediction based on the animal type and the uploaded file
    prediction = make_prediction(animal_type, file)
    
    return prediction

if __name__ == '__main__':
    app.run()
