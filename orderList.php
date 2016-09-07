<!DOCTYPE html>

<!--Comments go here.--> 
<html>
  <head>
    <title>Welcome to the Ritz!</title>
  </head>
  <body>
    <h1>Please take your order!</h1>
    <?php if (empty($orders)): ?>
      <p>There are no orders. Get them <a href="/catalog">order some</a>.</p>
    <?php else: ?>
      <p>Now get them drunk.</p>
      <table>
        <thead>
        <th>order id</th>
        <th>item id</th>
        <th>&nbsp;</th>
      </thead>
      <tbody>
        <?php foreach ($orders as $order): ?>
          <tr>
            <td><?php echo $order['id']; ?></td>
            <td><?php echo $order['item_id']; ?></td>
            <td>
              <form method="POST">
                <input name="id" type="hidden" value="<?php echo $order['id']; ?>">
                <button type="submit" name="status" value="1">Order FILLED</button>
                <button type="submit" name="status" value="0">Order CANCELED</button>
              </form>
            </td>
          </tr>
        <?php endforeach; ?>
    </table>
  <?php endif; ?>
  <p>If you are a patron then <a href="/catalog">order something</a>.</p>
  <p>Back to <a href="/">home page</a></p>
</body>
</html>

