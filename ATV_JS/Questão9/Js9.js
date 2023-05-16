function printArray() {
    var input = document.getElementById("input").value;
    var array = input.split(",");
    var output = document.getElementById("output");
    input.innerHTML = "";
    for (var i = 0; i < array.length; i++) {
      var item = document.createElement("div");
      item.className = "item";
      item.textContent = array[i].trim();
      output.appendChild(item);
    }
  }