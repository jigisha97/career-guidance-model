#!/usr/bin/env python
# coding: utf-8

# In[1]:


import pandas as pd
import numpy as np
import matplotlib.pyplot as plt


# In[2]:


df = pd.read_csv('/Users/shashankshivam/Desktop/dissertationfinalmarks1.csv')


# In[3]:


df.head()


# In[4]:


df.shape


# In[5]:


df = df.drop('Unnamed: 0',axis=1)


# In[6]:


df.shape


# In[7]:


df['field'].replace("IT",1,inplace=True)
df['field'].replace("managment",2,inplace=True)
df['field'].replace("Medical",3,inplace=True)
df['field'].replace("political_science",4,inplace=True)
df['field'].replace("others",5,inplace=True)


# In[8]:


X=df.drop(['field'],1)
X=X.values


# In[9]:


y=df['field']
y=y.values


# In[10]:


X


# In[11]:


y


# In[12]:


import sklearn
from sklearn.model_selection import train_test_split
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.33, random_state=42)
from sklearn import svm
from sklearn.svm import SVC
from sklearn import metrics
from sklearn.metrics import accuracy_score


# In[13]:


model = svm.SVC(kernel = "rbf")
model.fit(X_train, y_train)


# In[14]:


pred_y = model.predict(X_test)
print(metrics.classification_report(y_test, pred_y))
print(metrics.confusion_matrix(y_test,pred_y))
print(accuracy_score(y_test, pred_y))
svm_score=accuracy_score(y_test, pred_y)


# In[15]:


from sklearn.linear_model import LogisticRegression
from sklearn.metrics import accuracy_score 
model = LogisticRegression()
model.fit(X_test,y_test)
predicted_classes = model.predict(X_test)
accuracy = accuracy_score(y_test,predicted_classes)
#accuracy*100

print(metrics.classification_report(y_test, predicted_classes))
print(metrics.confusion_matrix(y_test,predicted_classes))
print(accuracy_score(y_test, predicted_classes))


# In[16]:


from sklearn.naive_bayes import GaussianNB
model = GaussianNB()
model.fit(X_train,y_train)
prediction = model.predict(X_test)


print(metrics.classification_report(y_test, prediction))
print(metrics.confusion_matrix(y_test,prediction))
print(accuracy_score(y_test, prediction))
accuracy_score(y_test,prediction)*100


# In[17]:


#X_test[1]


# In[27]:


t=np.array([62,71,40,47,42,34,89,92,25,41,0])
t


# In[19]:


#t=np.array(np.random.randint(10,50,11))


# In[20]:


#t=t.reshape(-1,1)


# In[28]:


t


# In[29]:


t=t.reshape(1,-1)
t


# In[23]:


#import Gaussian Naive Bayes model
from sklearn.naive_bayes import GaussianNB

#Create a Gaussian Classifier
gnb = GaussianNB()

#Train the model using the training sets
gnb.fit(X_train, y_train)

#Predict the response for test dataset
y_pred = gnb.predict(t)
print(y_pred)

