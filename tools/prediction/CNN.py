#encoding:utf-8

from matplotlib import pyplot as plt
plt.style.use("ggplot")
from pyecharts import options as opts
from pyecharts.charts import Bar
import sys
import os
from keras.utils import np_utils, vis_utils
import csv
import numpy as np
import pandas as pd

from sklearn.feature_selection import mutual_info_classif
from sklearn.metrics import roc_curve, confusion_matrix
from sklearn.model_selection import train_test_split
from sklearn.metrics import make_scorer, matthews_corrcoef
from sklearn.preprocessing import StandardScaler
from sklearn.svm import LinearSVC
from sklearn.ensemble import ExtraTreesClassifier
import pickle
from propythia.sequence import ReadSequence
from propythia.descriptors import Descriptor
from propythia.preprocess import Preprocess
from propythia.feature_selection import FeatureSelection
from propythia.shallow_ml import ShallowML
from propythia.deep_ml import DeepML
import json
import numpy as np
import pandas as pd
from keras.models import model_from_json
# load model

py_root = '/www/wwwroot/dracp/tools/prediction/'
tmp_dir = py_root + 'data/tmp/'
filename = sys.argv[1]

model = model_from_json(json.load(open(py_root + "model/model_CNN_struct.json")))
# load wights
model.load_weights(py_root + "model/model_CNN_weights.h5")



test_file = tmp_dir + filename + '.fasta'
test_data = pd.read_csv(test_file)
test_data = test_data.rename({'>': 'sequence'}, axis=1)
test_data = test_data[test_data['sequence'] != '>']
def calculate_feature(data):
    list_feature = []
    for seq in data['sequence']:
        res = {'sequence': seq}
        sequence = ReadSequence()  # creating sequence object
        ps = sequence.read_protein_sequence(seq)
        protein = Descriptor(ps)  # creating object to calculate descriptors
        feature = protein.adaptable([23])
        # lambda should not be larger than len(sequence)
        res.update(feature)
        list_feature.append(res)
    # print('saving features')
    df = pd.DataFrame(list_feature)
    return df
print('开始计算特征....')
test_feature = calculate_feature(test_data)

filename_tmp = tmp_dir + filename + '_tmp.csv'; 
test_feature.to_csv(filename_tmp, index = False)
test_data = pd.read_csv(filename_tmp)
test_data = test_data.drop(['sequence'], axis=1)
scaler = StandardScaler().fit(test_data)

X_test = scaler.transform(test_data)
X_test = X_test.reshape((X_test.shape[0],X_test.shape[1],1,1))


y_predict = model.predict(X_test)



seq = []
test_data = pd.read_csv(filename_tmp)
Sequence = []
ACP_or_NonACP = []
Label = []
count=0
for i in y_predict:
    count+=1
    Sequence.append(count)
    seq.append(test_data.sequence[count-1])
    if i[0] > i[1]:
        # print('0')
        ACP_or_NonACP.append('Non-ACP')
        Label.append(0)
    else:
        # print('1')
        ACP_or_NonACP.append('ACP')
        Label.append(1)
data = {'Sequence Number':Sequence,"Sequence":seq,'ACP or Non-ACP':ACP_or_NonACP,'Label':Label}
df = pd.DataFrame(data)

filename_result = tmp_dir + filename + '_result.csv'; 
df.to_csv(filename_result, index = False)

print(test_file)
print(filename_tmp)
print(filename_result)
