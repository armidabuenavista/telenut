Product Requirements Document (PRD)
________________________________________
Product Name: Telenutrition Platform
Version: 3
Last Updated: October 18, 2024
Author: Armida Contreras, PTA IV
________________________________________
1. Overview
The Telenutrition platform, accessible through the iFNRI website under the HELP Online section, is designed to facilitate free remote nutrition consultations. The system streamlines appointment scheduling, consultation management, and follow-up processes for clients and Registered Nutrition Dietitians (RNDs). The system integrates automated features for scheduling, notifications, and data handling, ensuring secure and user-friendly interactions for all parties.
2. Purpose
The primary objective of this platform is to provide free telenutrition counseling, automated patient data calculation, and easy access to educational tools and resources for clients, while ensuring that RNDs and admins can manage patient data, appointments, and progress effectively. This PRD specifies the requirements, features, and workflows for the platform, along with integration with external systems such as RND Desktop Application Tool and Client Registration System from a different website.
3. Key Stakeholders
•	Clients: End-users seeking nutritional assessments and recommendations.
•	RNDs: Nutrition professionals using the platform for patient assessment, counseling, and dietary recommendations.
•	Admins: Platform administrators responsible for managing users, monitoring system performance, and ensuring smooth operations.
•	External Website: A third-party platform where users (clients, admins, RNDs) must register to access the Telenutrition platform.
4. User Roles and Permissions
•	Client: Can schedule appointments, fill out personal and medical forms, receive notifications, and access uploaded meal plans.
•	Admin: Manages client form review, assigns RNDs, sets up Zoom meetings, sends reminders, and unlocks meal plans after evaluation form submission.
•	RND (Registered Nutrition Dietitian): Receives client assignments, selects consultation times, conducts counseling sessions, computes client data using the RNDforNCD Desktop Application, and uploads meal plans and set to start the process of follow-up schedules.
4. Features & Functional Requirements
A. User Authentication and Access Control
1.	Unified Registration & Login:
o	Clients, Admins, and RNDs must register on the external website and will be able to access the Telenutrition platform without logging in again.
o	The platform will integrate with the external system using API authentication to validate users and ensure seamless login across platforms.
2.	Role-Based Access:
o	Clients: Limited to viewing their data and scheduling appointments.
o	RNDs: Can perform assessments, use desktop tools for calculations, and upload patient data to the website.
o	Admins: Have full control over the platform, including managing users and content.
________________________________________
B. Features for RNDs (Registered Nutritionists-Dietitians)
1.	Automatic Calculations via RNDforNCD:
o	RNDs will use RNDforNCD, an offline desktop tool for automatic calculations of patient data, including RMR, TER, Macronutrient Distribution and Sample Meal Plan.
o	The desktop application will generate results that can be uploaded directly to the Telenutrition platform using file upload mechanism (CSV/PDF).
2.	Upload of Patient Results:
o	After the calculations, the RND will upload the results directly to the website.
o	The RND can export results into pdf format and manually upload them on the website.
________________________________________
C. Features for Clients
1.	Telenutrition Assessment and Counseling:
o	Clients can schedule appointments and receive dietary recommendations based on their medical conditions, including hypertension, diabetes, and overweight/obese.
o	Clients will be able to view their assessment results after the RND has uploaded the data.
2.	Access to Educational Materials:
o	FAQs Section, and Downloadable Materials will be available to clients.
o	Clients can access instructional videos, visual aids for food exchanges, and meal planning guides.
3.	Appointment Scheduling and Reminders:
o	Real-time scheduling of appointments with automatic reminders via email will be available to clients.
o	Integration with Google Calendar for follow-up scheduling is also possible.
________________________________________
D. Features for Admins
1.	User Management:
o	Admins can manage all platform users, including clients, RNDs, and other admin accounts.
o	Admins can monitor user activity and generate reports.
2.	Content Management:
o	Admins will be able to update FAQs, upload downloadable materials, and manage instructional content on the platform.
________________________________________
E. Core Features (All User Roles)
1.	Cross-Device Compatibility:
o	The platform will be fully responsive, ensuring compatibility across PCs, tablets, and smartphones.
2.	Multi-language Support:
o	The platform will support multiple languages (e.g., Tagalog/English) to cater to the diverse user base.
________________________________________
5. User Journeys
Client User Journey:
1.	Register on the external website.
2.	Login to the Telenutrition Platform (auto-authenticated via external platform).
3.	Schedule an appointment for nutrition counseling.
4.	Receive recommendations, view educational materials, and follow the counseling session.
5.	Receive notifications/reminders for appointments and follow-up scheduling.
RND User Journey:
1.	Register on the external website.
2.	Login to the Telenutrition Platform (auto-authenticated via external platform).
3.	Access chosen patient records.
4.	Use the desktop application to calculate nutrition metrics.
5.	Upload the results (manual file upload).
6.	Review and update patient data as necessary.
Admin User Journey:
1.	Register on the external website.
2.	Login to the Telenutrition Platform (auto-authenticated via external platform).
3.	Monitor user activity, manage appointments, and oversee platform functionality.
4.	Manage content, including FAQs, educational materials, and downloadable resources.
________________________________________
7.	Process Flow and Requirements
Wireframe
Appointment Scheduling:
•	The client clicks the “Make an Appointment” button.



 
The client selects 3 preferred dates and times from an interactive calendar.
Calendar Restrictions:
•	Weekends, holidays, the current day, and 1 day prior are blocked.
•	Time slots available: 8:00 AM to 3:00 PM.

 
The client must agree to the ICF before proceeding.
•	If No: Redirects to the homepage or process ends.
•	If Yes: The client proceeds to the next step.
 
 
 
 
Form Completion:
•	The client fills out the Personal Information Form and Medical Information Form.
•	Cancellation Option:
o	Clients can cancel the form-filling process.
o	A pop-up message appears for confirmation:
	If Yes: Submission is canceled.
	If No: Returns to the form to continue.

 
Wait for an email for the next instruction.
Form Submission:
•	The completed forms are automatically sent to the Admin.

For Admin Dashboard
 
Admin Review:
•	The admin reviews the submitted forms and assigns an RND
 
•	When RND is not available, transfer to available one
 
 
The admin sets and sends the meeting link both the client and the RND.

For RND Dashboard:

 

 
During Counseling

 
After the Counseling
•	The RND uploads the meal plan to the client’s portal and clicks “Mark as Completed”.
System Trigger:
•	Sends a notification to the admin that the evaluation link can be sent.

For Client Dashboard
 

 

 
 
Admin has to mark the feedback as completed in able to client to access the meal plan.
 

Flowchart










Counseling Cycle Flowchart
Step-by-step Process Flow
1.	Client Visits the Telenutrition Website:
o	The client navigates from the iFNRI website to the HELP Online section and selects the Telenutrition option.
2.	Appointment Scheduling:
o	The client clicks the “Make an Appointment” button.
o	The client selects 3 preferred dates and times from an interactive calendar.
o	Calendar Restrictions:
	Weekends, holidays, the current day, and 1 day prior are blocked.
	Time slots available: 8:00 AM to 3:00 PM.
3.	Informed Consent Form (ICF):
o	The client must agree to the ICF before proceeding.
	If No: Redirects to the homepage or process ends.
	If Yes: The client proceeds to the next step.
4.	Form Completion:
o	The client fills out the Personal Information Form and Medical Information Form.
o	Cancellation Option:
	Clients can cancel the form-filling process.
	A pop-up message appears for confirmation:
	If Yes: Submission is canceled.
	If No: Returns to the form to continue.
5.	Form Submission:
o	The completed forms are automatically sent to the Admin.
6.	Admin Review:
o	The Admin reviews the submitted forms and assigns an RND.
7.	RND Notification and Availability:
o	The assigned RND receives a notification.
o	RND Availability Check:
	If Yes: RND selects one of the 3 preferred dates and times.
	The system updates the calendar to block the selected slot.
	The admin is notified of the chosen date and time.
	If No: The RND finds a replacement, submits back to Admin with an explanation, and selects a new RND.
8.	Zoom Meeting Setup:
o	The admin sets up the Zoom meeting and prepares instructions.
o	The admin sends the meeting link and usage instructions to both the client and the RND.
9.	Consultation Reminder:
o	The system sends reminders 1 day before the consultation to both parties, including the Zoom link and meeting instructions.
10.	Conducting the Consultation:
o	The admin hosts the Zoom meeting at the confirmed time.
o	The RND conducts the session and uses the RNDforNCD Desktop Application to compute data (BMI, IBW, RMR, TER, 24-hour recall, and meal plan).
11.	Post-Consultation and Follow-Up:
o	The RND requests the client’s 3 preferred dates and times for a follow-up.
o	The RND uploads the meal plan to the client’s portal and clicks “Done”.
o	System Trigger:
	Sends a notification to the admin that the evaluation link can be sent.
12.	Evaluation Form:
o	The client receives and submits the Evaluation Form.
o	The admin marks the consultation as completed, unlocking the meal plan in the client’s portal.
6. Functional Requirements
•	Client Portal:
o	Appointment scheduling feature with calendar integration.
o	Informed Consent Form (ICF) with acceptance requirement.
o	Personal and Medical Information Form with a cancellation option.
o	Notification and reminder system.
o	View meal plans (locked until evaluation form submission).
•	Admin Portal:
o	Form review and RND assignment feature.
o	Zoom meeting setup and notification feature.
o	Automated reminders for consultations.
o	Evaluation form management and meal plan unlocking functionality.
•	RND Portal:
o	Notification of client assignments.
o	Date and time selection for consultations.
o	Use of RNDforNCD Desktop Application for patient data computation.
o	Uploading meal plans and marking the process as done.
7. Non-Functional Requirements
•	Security:
o	Data privacy measures for client information.
o	Secure login and authentication for all roles.
•	Performance:
o	The system must handle multiple client requests and notifications efficiently.
•	Usability:
o	User-friendly interface with clear navigation and prompts.
8. Technical Considerations
1.	Frontend:
o	The platform will be developed using HTML5, CSS3, and JavaScript (possibly using React.js or Vue.js for dynamic interactions).
o	API integration with the desktop application tool will be done using REST API.
2.	Backend:
o	The backend will be developed using PHP with a MySQL database.
o	Data synchronization with external systems will be handled via API endpoints and secure data handling methods.
3.	Database:
o	Use MySQL for storing user and patient data securely.
o	Ensure data consistency between the desktop tool and the platform using API.
________________________________________
9. Scope and Limitations
1.	Scope:
o	The platform will be web-based, responsive, and accessible across all devices.
o	Features such as appointment scheduling, calculation results uploading, and educational tools will be implemented.
2.	Limitations:
o	Offline functionality will be limited to the desktop tool. Real-time synchronization may not be possible for all features.
o	The platform will focus primarily on web functionality in this release, without mobile app development.
________________________________________

10. Acceptance Criteria
•	All client data forms must be successfully submitted to the Admin.
•	RNDs must receive notifications and be able to select consultation slots.
•	Zoom links and reminders must be sent 1 day before consultations.
•	Meal plans must be uploaded and visible post-evaluation.
11. Dependencies
•	Integration with iFNRI website and HELP Online.
•	Zoom API for meeting setup.
•	RNDforNCD Desktop Application for data computation.
12. Assumptions
•	Clients have access to the internet for consultations.
•	RNDs will respond to notifications promptly.
13. Constraints
•	Consultations can only occur between 8:00 AM and 3:00 PM on weekdays.
•	No weekend or holiday consultations.
14. Future Enhancements
•	Automated follow-up meeting scheduling.
•	Enhanced client profile with health progress tracking.

