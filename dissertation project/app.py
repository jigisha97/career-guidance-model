#!/usr/bin/env python
# coding: utf-8

# In[13]:


import numpy as np
from flask import Flask, request, jsonify, render_template
import pickle


app = Flask(__name__)
model = pickle.load(open('finalbackend.pkl', 'rb'))


# In[15]:


@app.route('/')
def home():
    return render_template('index.html')


# In[16]:

@app.route('/predict',methods=['POST'])
def predict():
    '''
    For rendering results on HTML GUI
    '''
    #t=np.array([45, 40, 74, 76, 77, 76, 85, 85, 86, 87, 85,0])

    # int_features = [int(x) for x in request.form.values()]
    int_features=np.array(np.random.randint(40,101,24))
    final_features = np.array(int_features).reshape(1,-1)
    prediction = model.predict(final_features)
    #prediction
    op="hiii"
    if(prediction==1):
        output="Technical"+"   "+"Courses Are : BE (Bachelor of Enginnering)- 4 years  BCA(Bachelor of Computer) --3 years"
    elif (prediction==2):
        output="Management"+"     "+"Courses Are : B.B.A.(Bachelor of Business Administration) 3 years.  B.M.S.–(Bachelor of Management Science). 3 years. "
    elif (prediction==3):
        output="Medical"+"      "+"Courses Are : MBBS() B-Pharm()"
    elif (prediction==4):
        output="Convivialist"+"   " +"Courses Are : B.J.M.–(Bachelor of Journalism and Mass Communications) 2-3 years.  LLB - 5 years   B.A. Sociology, B.A. Politics"
    elif (prediction==5):
        output="Artistic"+"    "+"Courses Are : Fashion and Designing Courses - 3 to 4 years  B.T.T.M.(Bachelor of Travel and Tourism Management) 3-4 years  Animation and Multimedia course"
    else:
        output="Teaching"+"B.A. (Bachelor of Arts.) Indian Culture, BED B.El.Ed.– stands for Bachelor of Elementary Education. Course duration is 4 years "

    return render_template('index.html',prediction_text='Your Feild is: {}'.format(output))

# In[ ]:


if __name__ == "__main__":
    app.run(debug=True)
