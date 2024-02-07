from sqlalchemy import create_engine
import mysql.connector
import pandas as pd

# Read the specific columns from Excel into a Pandas DataFrame
df = pd.read_excel("C:/Users/Matheus Haliski/Documents/EXCEL/qwq.xlsx")
print(df)
# Convert the 'ID' column to a nullable integer type
df['ID'] = pd.to_numeric(df['ID'], errors='coerce').astype('Int64')

# Replace NaN values in 'Municipio' and 'Regional' with an empty string
df['Nome'] = df['Nome'].astype(str).replace('nan', '')
df['Funcao'] = df['Funcao'].astype(str).replace('nan', '')
df['Ramal'] = df['Ramal'].astype(str).replace('nan', '')
df['Celular'] = df['Celular'].astype(str).replace('nan', '')
df['Email'] = df['Email'].astype(str).replace('nan', '')

# Replace 'your_username', 'your_password', 'your_host', and 'your_database' with your actual MySQL configuration
host = "localhost"
user = "root"
password = ""
database = "Regionais"

# Create a MySQL connection using mysql-connector
conn = mysql.connector.connect(
    host=host,
    user=user,
    password=password,
    database=database
)

mysql_cursor = conn.cursor()

for index, row in df.iterrows():
    id_value = row['ID']
    name = row['Nome']
    reg = row['Funcao']
    reg1 = row['Ramal']
    reg2 = row['Celular']
    reg3 = row['Email']
    # Use appropriate MySQL data types for string columns (VARCHAR or CHAR)
    sql_insert = "INSERT INTO ServidoresUniaodaVitoria (ID_Servidor, Nome, Funcao, Ramal, Celular,Email) VALUES (%s, %s, %s,%s,%s,%s)"
    values = (id_value, name, reg,reg1,reg2,reg3)

    mysql_cursor.execute(sql_insert, values)

conn.commit()
conn.close()
