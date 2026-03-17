This college campus recruitment system provides options like student login, company login and an admin login.
This software system provides an option to the students to create their profiles and upload all their details including their marks onto the system. 
The admin can check each student details and can remove faulty accounts. 
The system also consists of a company login where various companies visiting the college can view a list of students in that college and their respective resumes.
The software system allows students to view a list of companies who have posted for vacancy. 
The admin has overall rights over the system and can moderate and delete any details not pertaining to college placement rules. 
The project is beneficial for college students, various companies visiting the campus for recruitment and even the college placement officer. 
The system handles student as well as company data and efficiently displays all this data to respective sides.
Save the files in the following Structure:
campus-recruitment/
│
├── admin/
│   ├── dashboard.php
│   ├── students.php
│   └── companies.php
│
├── company/
│   ├── dashboard.php
│   └── view_students.php
│
├── student/
│   ├── dashboard.php
│   └── view_companies.php
│
├── includes/
│   ├── db.php
│   ├── header.php
│   └── footer.php
│
├── css/
│   └── style.css
│
├── login.php
├── register_student.php
├── register_company.php
├── logout.php
│
└── database/
    └── campus.sql
