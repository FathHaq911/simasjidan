function narcissistic(value) {
  let a = value.toString()
	let c = 0
  // let digit = a.length
  // let x = a[0]**digit
  // let y = a[1]**digit
  // let z = a[2]**digit
	// let o = a[3]**digit
	// let p = a[4]**digit
	// let q = a[5]**digit
  
	// if (digit == 1) {
	// 	return x == value ? true : false
	// } else if (digit == 2) {
	// 	return x + y == value ? true : false
	// } else if (digit == 3) {
	// 	return x + y + z == a ? true : false
	// } else if (digit == 4) {
	// 	return x + y + z + o == value ? true : false
	// } else if (digit == 5) {
	// 	return x + y + z + o + p == value ? true : false
	// } else {
	// 	return x + y + z + o + p + q == value ? true : false
	// }

	for (let b = 0; b < a.length; b++) {
		c += (a[b]**(a.length));
	}
	
	c == value ? console.log(true): console.log(false);
}

narcissistic(7)
