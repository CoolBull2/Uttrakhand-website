conn = pymysql.connect(host="localhost", user="root", password="abcd", database="form")
    cursor=conn.cursor()
    try:
        cursor.execute(f"insert into signupform (email,username,password,cpassword) values ({email},{username},{password},{cpass})")
    except:
        conn.rollback()
    
    c