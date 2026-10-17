<!DOCTYPE html>
<html>
    <head>

      <h1> Add Contact </h1>

      <form action="/SSS_Project/public/contacts/store" method="post">

      <p>
          <label> First Name </label>
      <br>
      <input type="text" name="first_name">
      <?php echo $validation->getError('first_name'); ?>
      <!--if first name is not filled out, error message-->
      </p>

      <p>
          <label> Last Name </label>
      <br>
      <input type="text" name="last_name">
      <?php echo $validation->getError('last_name'); ?>
      </p>

      <p>
          <label> Phone </label>
      <br>
      <input type="text" name="phone">
      <?php echo $validation->getError('phone'); ?>
      </p>

      <p>
          <label> Email </label>
      <br>
      <input type="text" name="email">
      <?php echo $validation->getError('email'); ?>
      </p>

      <p>
          <label> Address </label>
      <br>
      <input type="text" name="address_line">
      <?php echo $validation->getError('address_line'); ?>
      </p>

      <p>
          <label> City </label>
      <br>
      <input type="text" name="city">
      <?php echo $validation->getError('city'); ?>
      </p>

      <p>
          <label> Postcode </label>
      <br>
      <input type="text" name="postcode">
      <?php echo $validation->getError('postcode'); ?>
      </p>

      <p>
      <button type="submit"> Save Contact </button>
      </p>

      </form>