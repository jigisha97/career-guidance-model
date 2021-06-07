#!/usr/bin/env python
# coding: utf-8

# In[187]:


import pandas as pd
import numpy as np
import random
import pickle


# In[188]:


df=pd.DataFrame()  #it---g
df1=pd.DataFrame() #m----g
df3=pd.DataFrame() #it---av
df4=pd.DataFrame() #m----av
df5=pd.DataFrame() #it---p
df6=pd.DataFrame() #m----p
df7=pd.DataFrame() #med---g--c
df8=pd.DataFrame() #med---g--eco
df9=pd.DataFrame() #med--av
df10=pd.DataFrame() #med--av--eco
df11=pd.DataFrame() #poli --g
df12=pd.DataFrame() #poli--avg
df13=pd.DataFrame() #others


# In[189]:


df['maths']=np.random.randint(75,101,200)
df['comp']=np.random.randint(75,101,200)
df['ba']=np.random.randint(40,55,200)
df['states']=np.random.randint(40,67,200)
df['chemistry']=np.random.randint(40,60,200)
df['physics']=np.random.randint(40,65,200)
df['history']=np.random.randint(40,60,200)
df['politics']=np.random.randint(40,60,200)
df['economics']=np.random.randint(40,60,200)
df['english']=np.random.randint(45,75,200)
df['biology']=np.random.randint(40,60,200)
df['field']='IT'


# In[190]:


df3['maths']=np.random.randint(60,75,50)
df3['comp']=np.random.randint(60,75,50)
#df['interest']='problem_solving'
df3['ba']=np.random.randint(60,75,50)
df3['states']=np.random.randint(60,75,50)
df3['chemistry']=np.random.randint(60,75,50)
df3['physics']=np.random.randint(60,75,50)
df3['history']=0
df3['politics']=0
df3['economics']=np.random.randint(60,75,50)
df3['english']=np.random.randint(60,75,50)
df3['biology']=np.random.randint(40,55,50)
df3['field']='IT'


# In[191]:


df5['maths']=np.random.randint(40,55,50)
df5['comp']=np.random.randint(40,55,50)
#df['interest']='problem_solving'
df5['ba']=np.random.randint(40,55,50)
df5['states']=np.random.randint(40,55,50)
df5['chemistry']=np.random.randint(40,55,50)
df5['physics']=np.random.randint(40,55,50)
df5['history']=0
df5['politics']=0
df5['economics']=np.random.randint(40,55,50)
df5['english']=np.random.randint(40,55,50)
df5['biology']=np.random.randint(40,55,50)
df5['field']='IT'


# In[192]:


df1['maths']=np.random.randint(75,101,200)
df1['comp']=np.random.randint(75,101,200)
#df['interest']='problem_solving'
df1['ba']=np.random.randint(40,55,200)
df1['states']=np.random.randint(40,67,200)
df1['chemistry']=0
df1['physics']=0
df1['history']=0
df1['politics']=0
df1['economics']=np.random.randint(75,101,200)
df1['english']=np.random.randint(75,101,200)
df1['biology']=np.random.randint(40,55,200)
df1['field']='managment'


# In[193]:


df4['maths']=np.random.randint(60,75,50)
df4['comp']=np.random.randint(60,75,50)
#df['interest']='problem_solving'
df4['ba']=np.random.randint(60,75,50)
df4['states']=np.random.randint(60,75,50)
df4['chemistry']=np.random.randint(60,75,50)
df4['physics']=np.random.randint(60,75,50)
df4['history']=0
df4['politics']=0
df4['economics']=np.random.randint(60,75,50)
df4['english']=np.random.randint(60,75,50)
df4['biology']=np.random.randint(40,55,50)
df4['field']='managment'


# In[194]:


df6['maths']=np.random.randint(40,55,50)
df6['comp']=np.random.randint(40,55,50)
#df['interest']='problem_solving'
df6['ba']=np.random.randint(40,55,50)
df6['states']=np.random.randint(40,55,50)
df6['chemistry']=np.random.randint(40,55,50)
df6['physics']=np.random.randint(40,55,50)
df6['history']=0
df6['politics']=0
df6['economics']=np.random.randint(40,55,50)
df6['english']=np.random.randint(40,55,50)
df6['biology']=np.random.randint(40,55,50)
df6['field']='managment'


# In[195]:


#df7 = pd.DataFrame()
df7['maths']=np.random.randint(40,60,200)
df7['comp']=np.random.randint(40,60,200)
#df['interest']='problem_solving'
df7['ba']=0
df7['states']=np.random.randint(40,60,200)
df7['chemistry']=np.random.randint(65,101,200)
df7['physics']=np.random.randint(65,101,200)
df7['history']=0
df7['politics']=0
df7['economics']=np.random.randint(75,101,200)
df7['english']=np.random.randint(75,101,200)
df7['biology']=np.random.randint(75,101,200)
df7['field']='Medical'
df7.head()


# In[196]:


df8['maths']=np.random.randint(40,50,50)
df8['comp']=np.random.randint(40,50,50)
df8['ba']=0
df8['states']=np.random.randint(45,60,50)
df8['chemistry']=np.random.randint(60,75,50)
df8['physics']=np.random.randint(60,75,50)
df8['history']=0
df8['politics']=0
df8['economics']=np.random.randint(40,50,50)
df8['english']=np.random.randint(60,75,50)
df8['biology']=np.random.randint(60,75,50)
df8['field']='Medical'
df8.head()


# In[197]:


df9['maths']=np.random.randint(40,50,50)
df9['comp']=np.random.randint(40,50,50)
df9['ba']=0
df9['states']=np.random.randint(45,50,50)
df9['chemistry']=np.random.randint(40,55,50)
df9['physics']=np.random.randint(40,55,50)
df9['history']=0
df9['politics']=0
df9['economics']=np.random.randint(40,50,50)
df9['english']=np.random.randint(40,55,50)
df9['biology']=np.random.randint(40,59,50)
df9['field']='Medical'
df9.head()


# In[198]:


df2 = pd.concat([df,df1,df3,df4,df5,df6,df7,df8,df9])


# In[199]:


df2.head()


# In[200]:


df2['field'].replace("IT",1,inplace=True)
df2['field'].replace("managment",2,inplace=True)
df2['field'].replace("Medical",3,inplace=True)
df2
df2.describe()
df2.groupby('field').count()


# In[ ]:





# In[220]:


df2 = pd.read_csv('/Users/shashankshivam/Desktop/dissertationfinalmarks1.csv')
df2.head()


# In[221]:


df2['field'].replace("IT",1,inplace=True)
df2['field'].replace("managment",2,inplace=True)
df2['field'].replace("Medical",3,inplace=True)
df2['field'].replace("political_science",4,inplace=True)
df2['field'].replace("others",5,inplace=True)


# In[212]:


from sklearn.utils import shuffle
df2= shuffle(df2)


# In[222]:


X=df2.drop(['field'],1)
X=X.values


# In[223]:


y=df2['field']
y=y.values


# In[224]:


import sklearn
from sklearn.model_selection import train_test_split
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.33, random_state=42)
from sklearn import svm
from sklearn.svm import SVC
from sklearn import metrics
from sklearn.metrics import accuracy_score


# In[225]:


# model = svm.SVC(kernel = "rbf")
# model.fit(X_train, y_train)
# pred_y = model.predict(X_test)
# print(metrics.classification_report(y_test, pred_y))
# print(metrics.confusion_matrix(y_test,pred_y))
# print(accuracy_score(y_test, pred_y))
# svm_score=accuracy_score(y_test, pred_y)
#
#
# # In[226]:
#
#
# from sklearn.linear_model import LogisticRegression
# from sklearn.metrics import accuracy_score
# model = LogisticRegression()
# model.fit(X_test,y_test)
# predicted_classes = model.predict(X_test)
# accuracy = accuracy_score(y_test,predicted_classes)
# #accuracy*100
#
# print(metrics.classification_report(y_test, predicted_classes))
# print(metrics.confusion_matrix(y_test,predicted_classes))
# print(accuracy_score(y_test, predicted_classes))
#
#
# In[227]:
# t=np.array([[45,65,64,78,72,76,65,45,54,59,63]])
# print(t)
#t=t.reshape(1,- 1)


#import Gaussian Naive Bayes model
#import Gaussian Naive Bayes model
# from sklearn.naive_bayes import GaussianNB
#
# #Create a Gaussian Classifier
# gnb = GaussianNB()
#
# #Train the model using the training sets
# gnb.fit(X_train, y_train)
#
# #Predict the response for test dataset
# y_pred = gnb.predict(np.array([[45, 40, 74, 76, 77, 76, 85, 85, 86, 87, 85]]))
# print(y_pred)

t=np.array([45, 40, 74, 76, 77, 76, 85, 85, 86, 87, 85,0])
from sklearn.naive_bayes import GaussianNB
model = GaussianNB()
model.fit(X_train,y_train)
#prediction = model.predict(t.reshape(1,-1))


pickle.dump(model, open('model.pkl','wb'))

# Loading model to compare the results
model = pickle.load(open('model.pkl','rb'))
prediction=model.predict(t.reshape(1,-1))

if(prediction==1):
    prediction="IT"
elif (prediction==2):
    prediction="Manegment"
elif (prediction==3):
    prediction="Medical"
elif (prediction==4):
    prediction="Political Science"
else:
    prediction="other"

print("Pridiction is   ==",prediction)



# print("  ")
# print(X_test)
# print("1 vali",t)
# print(type(X_test))
# print(metrics.classification_report(y_test, prediction))
# print(metrics.confusion_matrix(y_test,prediction))
# print(accuracy_score(y_test, prediction))
# accuracy_score(y_test,prediction)*100

# In[ ]:


#
