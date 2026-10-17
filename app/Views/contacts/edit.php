<!DOCTYPE html>
<html>
    <head>
       <title> Edit Contact </title>
       </head>

   <body>

       <h1> Edit Contact </h1>

       <form action="/SSS_Project/public/contacts/update/<?= $contact['id'] ?>" method="post">
        <!--updates contact by id-->

        <p>
            <label> First Name </label>
               <input type="text" name="first_name" value="<?= $contact['first_name'] ?>">
                  </p>

        <p>
          <label> Last Name </label>
            <input type="text" name="last_name" value="<?= $contact['last_name'] ?>">
               </p>

        <p>
          <label> Phone </label>
            <input type="text" name="phone" value="<?= $contact['phone'] ?>">
               </p>

        <p>
          <label> Email </label>
            <input type="text" name="email" value="<?= $contact['email'] ?>">
               </p>

         <p>
           <label> Address </label>
              <input type="text" name="address_line" value="<?= $contact['address_line'] ?>">
               </p>

        <p>
          <label> City </label>
             <input type="text" name="city" value="<?= $contact['city'] ?>">
                </p>

        <p>
          <label> Postcode </label>
             <input type="text" name="postcode" value="<?= $contact['postcode'] ?>">
               </p>

        <p>
          <button type="submit"> Update Contact </button>
             </p>

</form>

</body>
</html>