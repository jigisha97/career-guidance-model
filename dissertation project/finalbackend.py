#!/usr/bin/env python
# coding: utf-8

# In[1]:


import numpy as np
import pandas as pd
import pickle


# In[2]:


df = pd.read_csv('/Users/shashankshivam/Desktop/finalmarks.csv')


# In[3]:


df.shape


# In[4]:


df.head()


# In[5]:


df.groupby('field').count()


# In[6]:


df = df.drop('Unnamed: 0',axis=1)


# In[7]:


df.head()


# In[8]:


X=df.drop(['field'],1)
X=X.values
y=df['field']
y=y.values


# In[9]:


from sklearn.model_selection import train_test_split
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.33, random_state=42)


# In[10]:


from sklearn.naive_bayes import GaussianNB
from sklearn.metrics import accuracy_score
from sklearn import metrics
model = GaussianNB()
model.fit(X_train,y_train)
prediction = model.predict(X_test)

print(metrics.classification_report(y_test, prediction))
print(metrics.confusion_matrix(y_test,prediction))
print(accuracy_score(y_test, prediction))
accuracy_score(y_test,prediction)*100


# In[14]:


t=np.array(np.random.randint(40,101,24))
from sklearn.naive_bayes import GaussianNB
model = GaussianNB()
model.fit(X_train,y_train)
#prediction = model.predict(t.reshape(1,-1))
#prediction[0]
pickle.dump(model, open('finalbackend.pkl','wb'))

# Loading model to compare the results
model = pickle.load(open('finalbackend.pkl','rb'))
prediction=model.predict(t.reshape(1,-1))
print(prediction[0])
print(t)
# In[ ]:
