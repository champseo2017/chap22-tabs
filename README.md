- ที่ทางฝั่ง local ต้องกำหนดอิลิเมนต์ที่เป็นโครงสร้างของแท็บให้ครบ แต่ไม่ต้องกำหนดเนื้อหา <br>
- ในส่วน jQuery เมื่อคลิกที่แท็บ ก็ให้ตรวจสอบว่าแท็บใดถูกคลิก แล้วส่งชื่อแท็บนั้นผ่าน AJAX ไปยัง เซิร์ฟเวอร์ <br>
- ทางฝั่งเซิร์ฟเวอร์จะกำหนดเนื้อหาสำหรับแท็บนั้นแล้วส่งกลับมา <br>
- เมื่อฝั่ง local ได้รับข้อมูลผลลัพธ์ ก็จะนำไปกำหนดค่าให้แก่แท็บที่ถูกคลิกต่อไป <br>
- การโหลดเนื้อหาของแท็บอาจต้องรอผลลัพธ์ชั่วขณะหนึ่ง ดังนั้นเราควรแสดง Indicator ให้ผู้ใช้ทราบด้วย

