import numpy as np
import pandas as pd
import sys
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import StandardScaler
from sklearn.svm import SVC
from sklearn.metrics import accuracy_score
import pickle


def predict_stress_level(interview_questions, years_experience, hours_willing_to_work):

    with open("D:\XAMPP\htdocs\code\scaler.pkl", 'rb') as file:
        scaler = pickle.load(file)


    with open("D:\XAMPP\htdocs\code\svm_stress_model3.pkl", 'rb') as file:
        loaded_model = pickle.load(file)


    new_data = pd.DataFrame({
        'Interview_Questions': [interview_questions],
        'Years_Experience': [years_experience],
        'Hours_Willing_To_Work': [hours_willing_to_work]
    })


    new_data_scaled = scaler.transform(new_data)


    prediction = loaded_model.predict(new_data_scaled)


    return prediction[0]


interview_questions = sys.argv[1]
years_experience = sys.argv[2]
hours_willing_to_work = sys.argv[3]
result = predict_stress_level(interview_questions, years_experience, hours_willing_to_work)
print(result)
