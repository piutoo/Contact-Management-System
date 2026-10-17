<!DOCTYPE html>
<html>
    <head>
        <title> Contacts </title>
    </head>

<style>

    body { background-color: #ffe6f0;
        font-family: Arial; }

    table { background-color: #ffd6e7; }

    th { background-color: #ff66a3;
        color: white;
        padding: 10px; }

    td { padding: 8px; }

    a { color: #cc0066; }

    h1 { color: #ffff; }

</style>

<body>
    <h1> Contacts List </h1>


    <a href="/SSS_Project/public/contacts/create"> Add New Contact</a>

        <!--search bar-->
        <form method="post" action="/SSS_Project/public/contacts/search">
            <input type="text" name="keyword" placeholder="search by name">
                <button type="submit"> Search </button>
                    </form>

    <table border="1">
        <tr>
            <th> ID </th>
             <th> Name </th>
              <th> Email </th>
               <th> Phone </th>
                <th> Address </th>
                 <th> City </th>
                  <th> Postcode </th>
                   <th> Actions </th> <!--buttons,links-->
                    </tr>

      <?php foreach ($contacts as $contact): ?> <!--stores and shows table data from contacts-->
  <tr>
      <td><?php echo $contact['id']; ?></td>
       <td><?php echo $contact['first_name'] . ' ' . $contact['last_name']; ?></td>
        <td><?php echo $contact['email']; ?></td>
         <td><?php echo $contact['phone']; ?></td>
          <td><?php echo $contact['address_line']; ?></td>
           <td><?php echo $contact['city']; ?></td>
            <td><?php echo $contact['postcode']; ?></td>
             <td>
               <a href="/SSS_Project/public/contacts/edit/<?php echo $contact['id']; ?>">Edit</a>
                <a href="/SSS_Project/public/contacts/delete/<?php echo $contact['id']; ?>">Delete</a>
      <!--creates link goes to that specific url each row gets its own link-->

          </td>
      </tr>
      <?php endforeach; ?>

        </table>
    </body>
</html>