import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import StandardScaler
from sklearn.ensemble import RandomForestClassifier
from sklearn.metrics import accuracy_score,confusion_matrix,classification_report
import pickle #a library used to save the model
from sklearn.svm import SVC
from sklearn.naive_bayes import GaussianNB as nb
from sklearn.neighbors import KNeighborsClassifier
data=pd.read_csv("heart.csv")
data.head()
data.shape
data.info()
data.dropna()
x=data.iloc[:,:13]
x.head()
x=data.drop(['target'],1)
x.head()
y=data['target']
y.head()
x_train,x_test,y_train,y_test=train_test_split(x,y,test_size=0.2,random_state=7)
scaler=StandardScaler()
x_train=scaler.fit_transform(x_train)
x_test=scaler.fit_transform(x_test)

#Random Forest

rf_clf=RandomForestClassifier(n_estimators=10,random_state=43)
rf_clf.fit(x_train,y_train)
y_pred=rf_clf.predict(x_test)
y_pred
print("Accuracy Score:",accuracy_score(y_test,y_pred)*100)
print("Confusion Matrix:\n",confusion_matrix(y_test,y_pred))
print("Classification Report:\n",classification_report(y_test,y_pred))
pickle.dump(rf_clf,open("model_rf.sav",'wb'))
pickle.dump(scaler,open("std_scaler.sav","wb"))

#SVM

svm_clf=SVC()
svm_clf.fit(x_train,y_train)
svm_pred=svm_clf.predict(x_test)
svm_pred
print("Accuracy Score:",accuracy_score(y_test,svm_pred)*100)
print("Confusion Matrix:\n",confusion_matrix(y_test,svm_pred))
print("Classification Report:\n",classification_report(y_test,svm_pred))

#Naive Bayes

gb_clf=nb()
gb_clf.fit(x_train,y_train)
gb_pred=gb_clf.predict(x_test)
gb_pred
print("Accuracy Score:",accuracy_score(y_test,gb_pred)*100)
print("Confusion Matrix:\n",confusion_matrix(y_test,gb_pred))
print("Classification Report:\n",classification_report(y_test,gb_pred))

#KNN

knn_clf=KNeighborsClassifier()
knn_clf.fit(x_train,y_train)
knn_pred=knn_clf.predict(x_test)
knn_pred
print("Accuracy Score:",accuracy_score(y_test,knn_pred)*100)
print("Confusion Matrix:\n",confusion_matrix(y_test,knn_pred))
print("Classification Report:\n",classification_report(y_test,knn_pred))

pickle.dump(knn_clf,open("model_knn.sav",'wb'))

