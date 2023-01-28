import json, mysql.connector

mydb = mysql.connector.connect(host="localhost",user="root",password="",database="eeresources")
cursor = mydb.cursor()


with open('resourcesmaster_01.json') as f:
    file = json.load(f)
    for i in file:
        if '\r' in i['Resources']:
            for k in i['Resources']:
                lis = i['Resources'].split('\r')
                for m in lis:
                    if m != '':
                        # print(i['TopicName'],m)
                        cursor.execute("INSERT INTO resourcesmaster_01(Subject, Category,TopicName,Resources,`Resource Type`,Notes,ConceptualRating) VALUES (%s,%s,%s,%s,%s,%s,%s)",(i['Subject'],i['Category'],i['TopicName'],m,i['Resource Type'],i['Notes'],i['ConceptualRating']))
                break
"""
# Which does not have many links single link per entry
with open('resourcesmaster_00.json') as f:
    file = json.load(f)
    for i in file:
        if not '\r' in i['Resources'] and i['Resource Type']=="0":
            print(i['TopicName'],i['Resources'])
            cursor.execute("INSERT INTO resourcesmaster_01(Subject, Category,TopicName,Resources,`Resource Type`,Notes,ConceptualRating) VALUES (%s,%s,%s,%s,%s,%s,%s)",(i['Subject'],i['Category'],i['TopicName'],i['Resources'],i['Resource Type'],i['Notes'],i['ConceptualRating']))
"""
mydb.commit()