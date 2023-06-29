function tri(numbers, order) {
    if (order === "asc") {
      return triAscendant(numbers);
    } else if (order === "desc") {
      return triDescendant(numbers);
    } else {
      console.error("Order should be 'asc' or 'desc'.");
      return numbers;
    }
  }
  
  function triAscendant(numbers) {
    return numbers.sort(function(a, b) {
      return a - b;
    });
  }
  
  function triDescendant(numbers) {
    return numbers.sort(function(a, b) {
      return b - a;
    });
  }

  var numbers = [5, 2, 8, 1, 10];
console.log(tri(numbers, "asc"));
console.log(tri(numbers, "desc"));