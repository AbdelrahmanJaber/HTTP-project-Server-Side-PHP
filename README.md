# HTTP-project-Server-Side-PHP
<br/>

This project entails developing a comprehensive system comprising a Java Web Client and server-side applications in PHP and Servlet. The primary objective is to facilitate the storage and retrieval of images through HTTP communication.

<br/>

<h2>Part 1: Java Client</h2>
The Java client application serves as the interface for users to interact with the server-side applications. It encompasses the following key functionalities:
<br/>
<br/>

* **User Authentication:** Users are required to provide a password and name for authorization before accessing any upload or download features.
  
* **File Listing:** The application displays a list or dropdown menu of available files for download, ensuring a user-friendly experience.
  
* **Image Upload:** Users can upload new images via the client application, which are subsequently added to the server's repository of downloadable images.

* **Graphical User Interface (GUI):** A GUI interface is implemented, comprising dropdowns, text fields, and buttons for seamless interaction. Image uploads utilize the POST method for efficient data transfer.

<br/>
<br/>

<h2>Part 2: Server Side</h2>
The server-side component consists of two distinct applications developed in PHP and Servlet, respectively. Both applications offer identical functionalities and are responsible for handling HTTP requests from the Java client while delivering appropriate responses. Key aspects of the server-side implementation include:
<br/>
<br/>

* **Database Integration:** Utilization of a MySQL database to store essential user information and image data, ensuring efficient data management.
  
* **Image Storage:** While image names are stored on the server, the actual image files are maintained as separate files, optimizing resource utilization.
  
* **User Authentication:** Implementation of robust user authentication mechanisms to prevent unauthorized access to upload and download functionalities, thereby enhancing system security.
  
* **Modular Design:** The server-side applications may employ multiple PHP pages or servlets as needed, without mandating session management. However, stringent yet practical measures are implemented to enforce user authorization.
  
* **Pre-defined Content:** Initial deployment includes a selection of pre-defined images available for download, streamlining the user experience.

<br/>
<br/>

<h2>Demo:</h2>
Watch the demo here: https://www.youtube.com/watch?v=uMP7hO3rfV8&t=156s
