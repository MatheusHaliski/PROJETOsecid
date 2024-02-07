from sqlalchemy import create_engine
import mysql.connector
import pandas as pd

# Read the specific columns from Excel into a Pandas DataFrame
df = pd.read_excel("C:/Users/Matheus Haliski/Documents/EXCEL/ffdsd.xlsx", usecols=['ID', 'Municipio', 'Regional'])

# Convert the 'ID' column to a nullable integer type
df['ID'] = pd.to_numeric(df['ID'], errors='coerce').astype('Int64')

# Replace NaN values in 'Municipio' and 'Regional' with an empty string
df['Municipio'] = df['Municipio'].astype(str).replace('nan', '')
df['Regional'] = df['Regional'].astype(str).replace('nan', '')

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
    name = row['Municipio']
    reg = row['Regional']
    
    # Use appropriate MySQL data types for string columns (VARCHAR or CHAR)

    sql_insert = "INSERT INTO Regionais (ID_Regional, Municipio, Nome_Regional) VALUES (%s, %s, %s)"
    values = (id_value, name, reg)
    mysql_cursor.execute(sql_insert, values)

conn.commit()
conn.close()
