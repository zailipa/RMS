# RMS
Registration Management System
A registration management sytem including three type of users; admin, student and professor. 

Definition of the Problem:

My mission in this project assignment is to construct a simple Registration Management System (RMS) for an academic institution using PHP technology, Apache Web Server (XAMPP tool etc) and MySQL database. There will be three types of users in the system: Administrator, Professors and Students. Each user of the system will have a unique username and a password.

The Administrator can do the following operations:
•	Login and Logout
•	Define a New Professor/Student (obtain name, surname etc. information regarding the professor/student and set his/her password, the length of the password should be between MinPwd and MaxPwd characters)
•	Define a New Course (obtain name, description, quota, final date, credits, consent needed or not, teaching professor etc. information regarding the course, you may assume that a course is taught by only one professor)
•	Deactivate an Existing User (Administrator user cannot be deactivated, prior to deactivating a user of professor type, you should check whether that professor is teaching any course and warn the user if that is the case, similarly a user of student type cannot be deactivated if the course list of that student is not empty)
•	Reset the Password of an Existing User (Administrator password can also be changed)
•	Obtain the List of All Professors/Students/Courses in the System
•	Management of System Parameters (set the value of MinPwd, MaxPwd, MaxCourse, MaxStuCourse and MaxProfCourse)
 
•	Get User Statistics Report (present the number of active professors, active students, deactivated professors, deactivated students)

Students can do the following operations:
•	Login and Logout
•	Change Password (the length of the password should be between MinPwd and MaxPwd
characters)
•	Ask for Consent (in case the addition of a course requires the consent of the professor)
•	Add a Course to Course List/ Remove a Course from the Course List (a student can add  at most MaxStuCourse courses and the quota of the courses should also be considered during this operation).
•	View Course List (list all the courses enrolled by the student and the corresponding grades).

Professors can do the following operations:
•	Login and Logout
•	Change Password (the length of the password should be between MinPwd and MaxPwd
characters)
•	View/Process Consent Requests (the professor can accept or reject the request)
•	View Course and Student List (list  all the courses  taught  by the professor  and the list  of the students enrolled).
•	Submit Grades (grades can have three distinct values, namely, Not Submitted, Passed, Failed, and once submitted cannot be changed)
