<?php
class calculadora {
public function divide ($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Não divide por 0");
  }
  return $dividend / $divisor;
}

try {
}catch(Exception $e) {
  echo "Unable to divide. ";
} finally {
  echo "Process complete.";
}
}
?>
