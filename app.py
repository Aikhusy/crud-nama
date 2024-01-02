from flask import Flask, request, render_template, jsonify
from pythonScript.regex import regex
app = Flask(__name__)

@app.route('/')
def home():
    return render_template("index.php")

@app.route('/regex', methods=['POST'])
def process_array():
    data = request.json
    mergedData= data.get('array')  

    result = regex(mergedData)
    return jsonify(result)

@app.route('/connect', methods=['POST'])
def connect():

    nama = request.form['nama']
    usia = request.form['usia']
    kota = request.form['kota']
    
    return "Data saved successfully!"


if __name__ == '__main__':
    app.run(debug=True)