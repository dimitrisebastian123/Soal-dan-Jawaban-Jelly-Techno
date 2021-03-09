from flask import Flask, render_template, request, url_for, redirect
from werkzeug.utils import secure_filename
import os
app = Flask(__name__)
path = os.getcwd()
path = path + '\q11\static\\'


@app.route('/', methods=['GET', 'POST'])
def index():

    if request.method == 'GET':
        res = []
        for i in os.listdir(path):
            res.append(i)
        return render_template('index.php', data=res)
    else:
        for i in os.listdir(path):
            os.remove(path+i)
        data = request.files.getlist('file')
        for file in data:
            if file:
                filename = secure_filename(file.filename)
                file.save(os.path.join(path, filename))
    return redirect(url_for("index"))


if __name__ == '__main__':
    app.run(host='127.0.0.1', port=8000, debug=True)
