<!DOCTYPE html>
<html>
<body>

<p>Click the button to display the date.</p>

<button onmouseover="displayDate()">The time is?</button>

<script>
function displayDate() {
  document.getElementById("demo").innerText = Date();
}
</script>

<p id="demo"></p>

</body>
</html> 
