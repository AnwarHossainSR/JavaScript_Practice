<!DOCTYPE html>
<html>
<body>

<p>Click the button to display the date.</p>

<button onclick="displayDate()">The time is?</button>

<script>
	var now=new Date();
function displayDate() {

  document.getElementById("demo").innerText = now.toDateString();
}
</script>

<p id="demo"></p>

</body>
</html> 
