#!/usr/bin/python
# -*- coding: UTF-8 -*-
import MySQLdb

db = MySQLdb.connect( 
	host="localhost",     #主機名
	user="root",          #用戶名
	passwd="sam8617527",   #密碼
	db="test")         #數據庫名稱

#查詢前，必須先獲取游標
cur = db.cursor()

#執行的都是原生SQL語句
cur.execute("SELECT * FROM names")

for row in cur.fetchall(): 
    print (row[0])

db.close()
