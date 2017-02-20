library(sqldf)

read.csv.sql("E:\UMD学期资料\737/300k.csv",sql="SELECT count(class) FROM file GROUP BY class",sep=",")
