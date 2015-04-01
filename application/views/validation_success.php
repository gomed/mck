<html>
    <head>
        <body>
        <h2> <?php echo validation_errors(); ?></h2>
        <h2> registration </h2>
        <form action="<?php echo base_url();?>welcome/form_vali" method="post">
        
        Name : <br/> <input type="text" name="name"> <br/>
        E-mail : <br/> <input type="text" name="email"> <br/>
        Password : <br/> <input type="password" name="password"> <br/>
        Re-Password : <br/> <input type="password" name="repassword"> <br/>
        <input type="submit" value="submit">
            <br/>
        
        </form>
        </body>
    </head>
</html>
