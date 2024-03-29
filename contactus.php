
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style type="text/css">
    	
   @import url('https://fonts.googleapis.com/css2?family=Lexend+Peta&display=swap');
*{
    margin: 0;
    padding: 0;
    font-family: 'Lexend Peta', sans-serif;
    box-sizing: border-box;

}
.contact{
    position: relative;
    min-height: 100vh;
    padding: 50px 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background: url(assets/img/pex.jpg);
    background-size: cover;
}
.contact .content{
    max-width: 800px;
    text-align: center;
}
.contact .content h2{
    font-size: 36px;
    font-weight: 500;
    color: black;
    margin-bottom: 20px;
}
.contact .content p{
    font-weight: 300;
    color: red;
}
.container{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
}
.container .contactInfo{
    width: 50%;
    display: flex;
    flex-direction: column;
}
.container .contactInfo .box{
    position: relative;
    padding: 20px 0;
    display: flex;
}
.container .contactInfo .box .icon{
    min-width: 60px;
    height: 60px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    font-size: 22px;
}
.container .contactInfo .box .text h3{
    display: flex;
    margin-left: 20px;
    font-size: 16px;
    color: blue;
    /* flex-direction: column; */
    font-weight: 500;
}
.container .contactInfo .box .text p{
    display: flex;
    margin-left: 20px;
    font-size: 16px;
    color: rgb(255, 255, 255);
    /* flex-direction: column; */
    font-weight: 300;
}
.contactForm{
    width: 40%;
    padding: 40px;
    background: #fff;

}
.contactForm h2{
    font-size: 30px;
    color: #333;
    font-weight: 500;
}
.contactForm .inputBox{
    position: relative;
    width: 100%;
    margin-top: 10px;
}
.contactForm .inputBox input,
.contactForm .inputBox textarea{
    width: 100%;
    padding: 5px 0;
    font-size: 16px;
    margin: 10px 0;
    border: none;
    border-bottom: 2px solid #333;
    outline: none;
    resize: none;
}
.contactForm .inputBox span{
    position: absolute;
    left: 0;
    padding: 5px 0;
    font-size: 16px;
    margin: 10px 0;
    pointer-events: none;
    transition: 0.5s;
    color: #666;
}
.contactForm .inputBox input:focus ~ span,
.contactForm .inputBox input:valid ~ span,
.contactForm .inputBox textarea:focus ~ span,
.contactForm .inputBox textarea:valid ~ span{
    color: #ff0000;
    font-size: 12px;
    transform: translateY(-20px);
}
.contactForm .inputBox input[type="submit"]{
    width: 100px;
    background: #00bcd4;
    color: #fff;
    border: none;
    cursor: pointer;
    padding: 10px;
    font-size: 18px;
}


    </style>
</head>
<body>
	

    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum nihil odit adipisci illo inventore eum, corrupti commodi delectus.</p>
        </div>
        <div class="container">

            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Butterfly Street,<br>Kathmandu,Nepal,<br>14568</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>9861339540</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>abc@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form>
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" required="required">
                        <span>Eamil</span>
                    </div>
                    <div class="inputBox">
                        <textarea name="" id="" required="required"></textarea>
                        <span>Type your Message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>

</body>
</html>