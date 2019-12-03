<?
\Bitrix\Main\Loader::includeModule('sale');
$historyEntityType = 'ORDER'; //В данном случае для заказа
$historyType = 'ORDER_COMMENTED'; //Нужный тип можно посмотеть в классе \CSaleOrderChangeFormat в $operationTypes
$order = \Bitrix\Sale\Order::load($orderId);
\Bitrix\Sale\OrderHistory::addAction(
      $historyEntityType,
      $order->getId(),
      $historyType,
      $order->getId(),
      $order,
      ['COMMENTS' => 'Новый комментарий']
);
$order->save();
?>
