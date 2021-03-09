def counts(arr, data):
    counting = 0
    for i in arr:
        if i == data:
            counting += 1
    return counting


data = ['Miaw', 'miaw', 'miaw', 'miaw', 'miaww']
print('Return : ', counts(data, 'miaw'))
