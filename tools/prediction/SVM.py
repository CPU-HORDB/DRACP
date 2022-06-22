#!/usr/local/env python3
# coding: utf-8

import sys
import os
import pickle
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
from propythia.sequence import ReadSequence
from propythia.descriptors import Descriptor
from propythia.preprocess import Preprocess
from propythia.feature_selection import FeatureSelection
from propythia.shallow_ml import ShallowML
from propythia.deep_ml import DeepML

py_root = '/www/wwwroot/dracp/tools/prediction/'
tmp_dir = py_root + 'data/tmp/'
filename = sys.argv[1]

test_file = tmp_dir + filename + '.fasta'
test_data = pd.read_csv(test_file)
test_data = test_data.rename({'>': 'sequence'}, axis=1)
test_data = test_data[test_data['sequence'] != '>']
def calculate_feature(data):
    list_feature = []
    for seq in data['sequence']:
        res = {'sequence': seq}
        sequence = ReadSequence() 
        ps = sequence.read_protein_sequence(seq)
        protein = Descriptor(ps)
        feature = protein.adaptable([4, 20, 21, 22])
        res.update(feature)
        list_feature.append(res)
    df = pd.DataFrame(list_feature)
    return df
print('开始计算特征....')
test_feature = calculate_feature(test_data)

filename_tmp = tmp_dir + filename + '_tmp.csv'; 
test_feature.to_csv(filename_tmp, index = False)
test_data = pd.read_csv(filename_tmp)
test_data = test_data.drop(['sequence'], axis=1)

with open(py_root + "model/model_svm.pkl", "rb") as f:
    model = pickle.load(f)
y_predict = model.predict(test_data)

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
    if i==0:
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
