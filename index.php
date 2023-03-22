<?php
header('X-Content-Type-Options:nosniff');
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset="UTF-8">
<meta http-equiv="content-type" content="text/html">
<meta http-equiv="content-type" content="text/css">
<title>How to Create a Quiz app</title>
<meta http-equiv="Cache-Control" content="no-cache">
<meta name="google-site-verification" content="i83iIZqn5guxpiQgkb-iPwmK6zgyQasJDEYxiMwAcYg" />
<link rel="icon" type="image/x-icon" href="image/applogo.png">
<meta name="keywords" content="kivy tutorial, python tutorial, kivy app">
<meta name="keywords" content="quiz app, android app, kivy app for android">
<meta name="keywords" content="simplikivyappp.com">
<meta name="keywords" content="www.simplikivyappp.com">
<meta name="description" content="How to create a simple kivy app and quiz game app">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Bishal Shrestha">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
<link rel="stylesheet" href="stylemobile.css" />

</head>
<body>
<!-- Note -->
<div id="d">
  <h1>How to Create Simple KivyApp & Quiz GameApp</h1>
  <div class="dtitle">In this tutorial, I am targeting especially beginner who wants to create the first Kivy App and also used simple English Grammar Language so everyone can understand and be able to create Simple Kivy App.</div>
</div>

<!-- The flexible grid (content) -->
<div class="row"> 
  <div class="side">
       <!--ads scene-->
        <div class="adsmo">


        </div>
    <hr>
    <h3><a href="#quiz">Simple Quiz App</a></h4>
    <h3><a href="quiz-app">Japanese Learning Quiz App</a></h3>
    <p><a href="quiz-app">Photos of Japanese Quiz App</a></p>
    <div class="fakeimg">
        <img src="image/img/app1.png" alt="image" class="avatar">
        <img src="image/img/app6.png" alt="image" class="avatar">
        <img src="image/img/app7.png" alt="image" class="avatar">
        <img src="image/img/app4.png" alt="image" class="avatar">
    </div>
    <p class="short">I have made a Japanese learning Quiz app you can download onto your phone and install it.<br><a href="quiz-app">Click Here</a></p>
  </div>
  <div class="main">
    <div class="middle">

    <div class="h2">Kivy</div>
    <p>Kivy is an open-source Python library;
        you can use it to create applications on Windows, Linux, macOS, Android, and iOS. It allows you to create a GUI using widgets and layouts. Kivy is a cross-platform GUI development library, which means that we can create graphical user interfaces using Kivy on Mac, Linux, Windows, Android, and iOS.</p>
    <p>If you have knowledge of Python, then you can create a simple Kivy App. In this tutorial, we are going to create beautiful Quiz App. Let us Start</p> 
    <div class="h2">Simple Kivy App</div>
        
    <p>Kivy is a Python framework so create a new file with the <b>.py</b> extension</p>
    <h4>Let’s create a new file 'main.py'.</h4>
    <div class="scroll">
    <pre>

<font># import the necessary modules.</font>
<span class="blue">from</span> kivy.app <span class="blue">import</span> App
<span class="blue">from</span> kivy.uix.button <span class="blue">import</span> Button

<font># To represent our window.</font>
<span class="blue">class</span> FirstKivy(App):

    <span class="blue">def</span> build(self):
        <span class="pinkblack">return</span> Button(text=<span class="text">"Welcome to LikeGeeks!"</span>)

<span class="pink">if</span> <span class="blue">__name__</span> == <span class="main_">'__main__'</span>:
    <span class="run_">FirstKivy()</span>.run()
    </pre>
    </div>
    <p>You can copy the above code and paste it into your main.py file. After pasting run this code. The screenshot is given below:
    </p>
    <img src="Capture.PNG" alt="Kivy App Image" class="img1">
    <div class="h2">KV Language</div>
    <p>KV language is a design language that use to make the GUI/Layout of kivy Application. Now, let's make one or more buttons using kv language. </p>
    <h4>main.py file</h4>
    <p>Let's add a few codes in the main.py file to create a screen with one or two buttons.</p>
    <div class="scroll">
    <pre>
<span class="blue">from</span> kivy.app <span class="blue">import</span> App
<span class="blue">from</span> kivy.uix.screenmanager <span class="blue">import</span> ScreenManager, Screen
<span class="blue">from</span> kivy.uix.button <span class="blue">import</span> Button
<font># import kv.kv file</font>
<span class="blue">from</span> kivy.lang <span class="blue">import</span> Builder
Builder.load_file(<span class="text">"kv.kv"</span>)

<font>#Screen layout class</font>
<span class="blue">class</span> Home(Screen):
    <span class="pink">pass</span>

<span class="blue">class</span> FirstKivy(App):
    <span class="blue">def</span> build(self):
        home=Home() <font># call Home() Class</font>
        <span class="pinkblack">return</span> home

<span class="pink">if</span> <span class="blue">__name__</span> == <span class="main_">'__main__'</span>:
    <span class="run_">FirstKivy()</span>.run()
        </pre>
    </div>
    <h4>kv.kv file</h4>
    <p>Now we create the Layout of the screen with two or three buttons using the kv language. Let's create a new file kv.kv.</p>
    <div class="scroll">
    <pre>
<font>#:kivy 1.9.2</font>
<span class="blue">&lt;Home&gt;</span>:<font># This represents the Home(screen) class of main.py file.</font>
    <span class="kv1">BoxLayout</span>:
        id: id_of_box
        orientation:class="text""vertical"</font>
        
        <span class="kv1">Label</span>:
            id:id_label
            text: <font>"Press any buttons"</font>
        
        <span class="kv1">Button</Button></span>:
            id: id_of_first_button
            text:class="text""Button 1"</font>
                        
        <span class="kv1">Button</span>:
            text:class="text""Button 2"</font>
        </pre>
    </div>
    <p>You can copy the above code and paste it into your main.py and kv.kv file. After pasting all codes, run the main.py file. Screenshot is given below:
        </p>
    <img src="Capture2.PNG" alt="Kivy App Image" class="img1">
    <p>
        <b>Here</b>, we made two buttons and one label using the kv language. Now we are going to change the screen if we press the button 1. It is a great chance to create another screen. Also, we are gonna change the label text of the Home() class when we press button 2.
    </p>
 <!--ads scene-->
    <div class="ads1">

    </div>
    <h4>main.py file</h4>
    <p>Again, Let's add a few codes in the main.py file to create another screen with a <font>beautiful</font> GUI/Layout.</p>
    <div class="scroll">
    <pre>
<span class="blue">from</span> kivy.app <span class="blue">import</span> App
<span class="blue">from</span> kivy.uix.screenmanager <span class="blue">import</span> ScreenManager, Screen
<span class="blue">from</span> kivy.uix.button <span class="blue">import</span> Button
<font># import kv.kv file</font>
<span class="blue">from</span> kivy.lang <span class="blue">import</span> Builder
Builder.load_file(<span class="text">"kv.kv"</span>)

<font>#Screen layout class</font>
<span class="blue">class</span> Home(Screen):
    <span class="blue">def</span> changeText(self): #self represents Home() class
        self.ids.id_label.text=<span class="text">"You pressed button 2"</span>
        <font># self.ids means ids of Home() class from kv.kv</font>
        <font># id_label is the id of Label from kv.kv</font>
        <font># text is the text of Label</font>
        
<font>#Another Screen layout class</font>
<span class="blue">class</span> AnotherScreen(Screen):
    <span class="pink">pass</span>

<span class="blue">class</span> FirstKivy(App):
    <span class="blue">def</span> build(self):
        <font># Create the screen manager</font>
        sm = ScreenManager()
        sm.add_widget(Home(name=<span class="text">'FirstScreen'</span>))
        sm.add_widget(AnotherScreen(name=<span class="text">'SecondScreen'</span>))
        <span class="pinkblack">return</span> sm

<span class="pink">if</span> <span class="blue">__name__</span> == <span class="main_">'__main__'</span>:
    <span class="run_">FirstKivy()</span>.run()
    </pre>
    </div>
    <h4>kv.kv file</h4>
    <p>Now we create the Layout of the another screen with Label and Button using the kv language. </p>
    <div class="scroll">
    <pre>
<font>#:kivy 1.9.2</font>
<span class="blue">&lt;Home&gt;</span>:<font># This represents the class home(screen) of main.py file.</font>
    <span class="kv1">BoxLayout</span>:
        id: id_of_box
        orientation: "vertical"
        
        <span class="kv1">Label</span>:
            id:id_label
            text: "Press any button"
            color: (1,0,0,1)
            font_size: '25sp'
            
        <span class="kv1">Button</span>:
            id: id_of_first_button
            text: "Button 1"
            <font>#If press button 1, the screen changes to the Second screen.</font>
            on_press: root.manager.current = 'SecondScreen'   

        <span class="kv1">Button</span>:
            text: "Button 2"
            <font>#function that will be called from Home() class</font>
            on_press: root.changeText()

<span class="blue">&lt;AnotherScreen&gt;</span>:
    <span class="kv1">BoxLayout</span>:
        orientation: "vertical"
        <span class="kv1">Label</span>:
            text:"You are in Second Screen"
            font_size: '25sp'
            color: (0,1,0,1)

        <span class="kv1">Button</span>:
            text:"Back To Home"
            background_nornal: 'nornal.png'
            background_coloe: (1,0.5,0.5,0)
            on_press: root.manager.current = 'FirstScreen'
    </pre>
    </div>
    <p>You can copy the above code and paste it into your main.py and kv.kv file. After pasting all codes,run main.py file. Here are some images:
    </p>
    <p>If you press button 1, you see like this</p>
    <img src="Capture4.PNG" alt="Kivy App Image" class="img1">  <br/>  
    <p>If you press button 2, you see like this</p>
    <img src="Capture5.PNG" alt="Kivy App Image" class="img1">    
    <br><br>
    <hr>
    <h2 id ="quiz">Quiz App</h2>
    <p>Let's create a simple <b>Quiz App</b> with a <font>beautiful GUI/Layout</font>. Now, you have a chance to learn how to create a quiz app step by step.</p>
    <p>You have to need three files:</p>
    <ul>
        <li><b>'main.py'</b>.</li>
        <li><b>'quiz.kv'</b>.</li>
        <li><b>'question.csv'</b>.</li>
        <li>You can put file name as you wish.</li>
    </ul>
   <!--ads scene-->
   <div class="ads1">


   </div>  
    <p>Delete all the code from the <b>main.py</b> file and paste all the code which are given below into your <b><i>main.py</i></b> file.</p>
    <div class="scroll">
    <pre>
<span class="blue">from</span> kivy.app <span class="blue">import</span> App
<span class="blue">from</span> kivy.uix.screenmanager <span class="blue">import</span> ScreenManager, Screen
<span class="blue">from</span> kivy.properties <span class="blue">import</span> StringProperty, NumericProperty, ObjectProperty, ListProperty
<span class="blue">from</span> kivy.core.window <span class="blue">import</span> Window
<span class="blue">import</span> csv
<font># import kv.kv file</font>
<span class="blue">from</span> kivy.lang <span class="blue">import</span> Builder
Builder.load_file(<span class="text">"quiz.kv"</span>)

<font>#Home Screen layout class</font>
<span class="blue">class</span> Home(Screen):
    <span class="pink">pass</span>

<font>#Quiz Screen layout class</font>
<span class="blue">class</span> QuizScreen(Screen):
    <font># set variables</font>
    question= StringProperty()
    ans= StringProperty()
    ans1= StringProperty()
    ans2= StringProperty()
    Ans_data= StringProperty()
    error= StringProperty()
    error_number= NumericProperty(0)
    page_number=NumericProperty()
    no=NumericProperty()
    df=ListProperty()
    correct_answer=StringProperty()

    <span class="blue">def</span> __init__(self, **kwargs):
        super(<span class="blue">QuizScreen</span>, self).__init__(**kwargs)
        self.no=int(1)
        self.page_number= int(1)
        op=open('question.csv', 'r', encoding='utf-8')
        self.df=list(csv.reader(op))
        self.question=self.df[self.no][0]
        self.correct_answer=self.df[self.no][1]
        self.ans=self.df[self.no][2] <font>#Answer for option Button 1</font>
        self.ans1=self.df[self.no][3] <font>#Answer for option Button 2</font>
        self.ans2=self.df[self.no][4] <font>#Answer for option Button 3</font>

    <span class="blue">def</span> restart(self):
        self.no= int(0) <font># Restart from Q1</font>
        self.error_number=int(0) <font># set 0 wrong</font>
        self.page_number=int(0) <font># Set 1 page</font>
        self.go_next(self.correct_answer) <font># call go_next() functon</font>

    <span class="blue">def</span> go_next(self, find):
        self.error ='' <font>#Set error variable to NON</font>

        <span class="pink">if</span>  self.correct_answer == find:
            self.no=self.no+1 #for next question
            self.page_number=self.page_number + 1
            self.question=self.df[self.no][0]
            self.correct_answer=self.df[self.no][1]
            self.ans=self.df[self.no][2]
            self.ans1=self.df[self.no][3]
            self.ans2=self.df[self.no][4]                  
        <span class="pink">else</span>:
            self.error='[color=#FF0000]Wrong Answer Try Again[/color]'
            self.error_number=self.error_number+1 
    
<span class="blue">class</span> QuizApp(App):
    <span class="blue">def</span> __init__(self, **kwargs):
        super(<span class="blue">QuizApp</span>, self).__init__(**kwargs)
        <font># Background color of app</font>
        Window.clearcolor = (1,1,1,1) 
        <font>#Size of app</font>
        Window.size = (330, 600)

    <span class="blue">def</span> build(self):
        <font># Create the screen manager</font>
        sm = ScreenManager()
        sm.add_widget(Home(name=<span class="text">'HomeScreen'</span>))
        sm.add_widget(QuizScreen(name=<span class="text">'QuizScreen'</span>))
        <span class="pinkblack">return</span> sm

<span class="pink">if</span> <span class="blue">__name__</span> == <span class="main_">'__main__'</span>:
    <span class="run_">FirstKivy()</span>.run()

    </pre>
    </div>
    <p>Delete all the code from the <b>quiz.kv</b> file and paste all the code which are given below into your <b><i>qui.kv</i></b> file.</p>    <p><font color="0000ff">Be careful in line 23.</font> Replace 'screen.png' file name with any file name You have as you wish.</p>
    <div class="scroll">
    <pre>
<font>#:kivy 1.9.2</font>
<span class="blue">&lt;Home&gt;</span>: <font># This represents the class home(screen) of main.py file.</font>
    padding: '5sp'
    <span class="kv1">BoxLayout</span>:
        orientation: 'vertical'
        <span class="kv1">ActionBar</span>: <font># navigation Bar</font>
            background_image: ''
            background_color: 135/255,206/255,235/255
            size_y: '35sp'
            <span class="kv1">ActionView</span>:
                <span class="kv1">ActionPrevious</span>:
                    title: '[b]Quiz App[/b]' 
                    color: 0,0,0,1
                    with_previous: False
                    markup: True

        <span class="kv1">GridLayout</span>:
            padding: '8sp' 
            rows:2
            spacing: '5sp'
            size_hint: (1,0.7)
            <span class="kv1">Image</span>:
                <font>#Replace 'screen.png' file name with any file name You have as you wish.</font>
                source: 'screen.png'
                keep_ratio: False
                allow_stretch: True

            <span class="kv1">GridLayout</span>:
                cols: 2
                rows: 2
                padding: '8sp'
                spacing: '5sp'
                <span class="kv1">Button</span>:
                    text:'Start Quiz'
                    color: (0,0,0,1)
                    background_normal: 'normal.png'
                    background_color: (1,0.5,0,0.6)
                    font_size: self.width/6
                    on_press: root.manager.current='QuizScreen'           
                <span class="kv1">Button</span>:
                    text:'Button '
                    color: (0,0,0,1)
                    font_size: self.width/6
                    on_press: 

                <span class="kv1">Button</span>:
                    text:'Button 1'
                    color: (0,0,0,1)
                    font_size: self.width/6
                    background_normal: 'normal.png'
                    background_color: (0,1,0,0.6)

                <span class="kv1">Button</span>:
                    text:'Button 2'
                    color: (0,0,0,1)
                    font_size: self.width/6
                    background_normal: 'normal.png'
                    background_color: (0.7,0,0,0.6)

<span class="blue">&lt;QuizScreen&gt;</span>:
    <span class="kv1">BoxLayout</span>:
        orientation:'vertical'
        <span class="kv1">GridLayout</span>:
            rows:2
            padding: ['25sp','1sp']
            size_hint_y: 0.13
            <span class="kv1">canvas.before</span>:
                Color:
                    rgb: (245/255,245/255,245/255)
                Rectangle:
                    size: self.size
                    pos:  self.pos

            <span class="kv1">Label</span>:
                text: "Quiz Game"
                color: 0,0,0,1

            <span class="kv1">BoxLayout</span>:
                <span class="kv1">Label</span>:
                    color: 0,0,0,1
                    <font># root represents QuizScreen() class variable</font>
                    text: str(root.page_number)+' Page'
                <span class="kv1">Label</span>:
                    text:str(root.error_number)+' Wrong'
                    color: 0,0,0,1

        <span class="kv1">Label</span>:
            <font># root represents QuizScreen() class variable</font>
            text: root.error
            size_hint_y: 0.08
            text_size: self.width, None
            height: self.texture_size[1]
            font_size:'18sp'
            markup: True
            color: 0,0,0,1

        <span class="kv1">Label</span>:
            id: label1
            text: root.question       
            size_hint_y: 0.34
            color: 0,0,0,1
            text_size: self.width, None
            height: self.texture_size[1]
            halign: 'center'         
            markup: True

        <span class="kv1">Button</span>:
            id:bttn1 
            text: root.ans                  
            size_hint_y: 0.1
            font_size: '20sp'
            on_press: root.go_next(bttn1.text)   

        <span class="kv1">Button</span>:
            id:bttn2   
            text: root.ans1      
            size_hint_y: 0.1
            font_size: '20sp'
            on_press: root.go_next(bttn2.text)  

        <span class="kv1">Button</span>:
            id:bttn3
            text: root.ans2        
            size_hint_y: 0.1
            font_size: '20sp'
            on_press: root.go_next(bttn3.text)  

        <span class="kv1">BoxLayout</span>:
            padding: '5sp'
            size_hint_y: 0.15
            <span class="kv1">Button</span>:
                id: button1
                text: 'Go Back'
                font_size: '20sp'
                background_color: 1,0,0,1
                on_press: root.manager.current='HomeScreen'

            <span class="kv1">Button</span>:
                id: button2
                text: 'Re-Start'
                font_size: '20sp'
                background_color: 1,0,0,1
                on_press: root.restart()                   
    </pre>
    </div>
    <p><b>Now,</b> create a new file <b><i>question.csv. Here, I have collected a few questions which are given below.</i></b></p>
    <p>Copy all questions and paste it into your new file <i>question.csv.</i></p>

    <div class="scroll">
    <pre>
question,answer,option1,option2,option3
What is your father name?,Bishal,Ram,Bishal,Tanaka
Which Planet Is The Hottest In The Solar System?,Venus,Earth,Mars,Venus
What Is The Most Common Letter In The English Alphabet?,E,A,E,G
If A Male Donkey Is A Jack What Is The Female Called?,Jenny,Jenny,Jacky,Jally
what is the capital of japan?,Tokyo,Osaka,Yokohama,Tokyo
How many planetary systems exist in our galaxy?,9,8,9,7
How Many Continents Are There?,7,2,7,3
How many oceans are there?,5,2,3,5
    </pre>      
    </div>
    <p>After pasting all the code, run the main.py file. Here are two images:
    </p>
    <img class="img2" src="Capture6.PNG" alt="Kivy App Image">  <br/>  
    <img class="img2" src="Capture7.PNG" alt="Kivy App Image">  
    </div>
    <!--adscence-->
    <div class="ads">

    </div>
  </div>

</div>
<hr>
<div class="row2">
  <div  class="cmmt" id="form">
    <h2>Leave Comment</h2>
    <p>If you have any feedback, leave comments.</p><br>
    <form action="fdf2rt" method="post" enctype="multipart/form-data">
        <div class="label">
        <input type="text" id="name" name="name" required>
        <label for="name">Enter Name</label>
        </div>  

        <div class="label"> 
        <textarea name="comments" id="comment"required></textarea>
        <label for="comment">Enter Comment</label>
        </div>  

    <input type="submit" name="entry" value="Submit">  
    </form>

  </div>

 <?php
 //retrive comments
 $status="";
 $con = mysqli_connect('server319','currided_bishal','q1rCE9)AnLkp','currided_kivyapp');
 if (!$con) {
   $status="No Connection";
 }
 if($status==""){
 $sql="SELECT * FROM comment";
 $res=mysqli_query($con,  $sql);
 if($res) {
     if(mysqli_num_rows($res)>0){
     while($row=mysqli_fetch_assoc($res)){
         $text= "<div class='users'><div class='dateleft'>".$row['date']."</div><div class='user'> <b>".$row['name']."</b></div><div><i>".$row['comments']."</i></div></div>";
         $status=$status.$text;
     }
   }else{
     $status="No Comments.....";
   }
  }
 }
 ?> 

  <div class="commentbox">
    <div>Comments:</div>
    <hr>
    <div id="demo">
    <?php echo $status; ?>
    </div>
   </div>
</div>

<div class="footer">
  <div id="main">
      <!--https://www.termsfeed.com/live/61df029c-3f40-4bb6-b9f2-a69226ce85dc-->
    <div><a class="send" href="privacy-policy">Privacy Policy</a></div>
    <div>
      <div class="f1">
        Learn Python Kivy
      </div>
      <font >Python Kivy </font>
    </div>
    <div><a class="send" href="contact-us">Contact Me</a></div>
  </div>

</div>

</body>
</html>
