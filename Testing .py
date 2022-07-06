
import pandas as pd
import pickle as pk

test_data=pd.read_csv("test.csv")
scaler=pk.load(open("std_scaler.sav","rb"))

clf=pk.load(open("model_knn.sav","rb"))
test_data=scaler.transform(test_data)

test_pred=clf.predict(test_data)
test_pred

if test_pred[0]==1:
    print("Patient is having Cardiac Disease.")

else :
    print("Patient is not having Cardiac Disease.")

