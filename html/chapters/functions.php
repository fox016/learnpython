<p>
This book has already used some examples of functions. The <code>print</code> function takes input and processes it by displaying it on the screen. The <code>len</code> function takes a string as input and returns the length of the string as output. The <code>lower</code> function takes a string as input, processes it by changing all the characters to lowercase, then returns the lowercase string as output. The <code>replace</code> function takes three strings as input (the original string, the value to find, and the value to replace it with), processes the input by performing a find/replace, then returns the processed string as output.
</p>

<h2>What Do Functions Do?</h2>

<p>
Functions do <strong>at least one</strong> (and possibly all) of the following three things:
</p>
<ol>
	<li>Accept one or more values as input</li>
	<li>Perform processes</li>
	<li>Return output</li>
</ol>
<p>
If you ever find yourself typing in the same code over and over again to do the same thing with different data, you can create your own function instead. For example, suppose you are at a pizza place that offers four different sizes of pizza for different prices. You want to know how cost-effective each size is by calculating the price per square inch of each pizza. Without using functions, your code might look like this:
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
	pi = 3.14159

	size1 = 10
	price1 = 5.50
	r1 = size1 / 2.0
	area1 = pi * r1**2
	cost1 = int(price1 / area1 * 1000)/1000.0
	print("The cost per square inch of the " + str(size1) + " inch pizza is $" + str(cost1))

	size2 = 12
	price2 = 7.00
	r2 = size2 / 2.0
	area2 = pi * r2**2
	cost2 = int(price2 / area2 * 1000)/1000.0
	print("The cost per square inch of the " + str(size2) + " inch pizza is $" + str(cost2))

	size3 = 16
	price3 = 11.25
	r3 = size3 / 2.0
	area3 = pi * r3**2
	cost3 = int(price3 / area3 * 1000)/1000.0
	print("The cost per square inch of the " + str(size3) + " inch pizza is $" + str(cost3))

	size4 = 20
	price4 = 15.25
	r4 = size4 / 2.0
	area4 = pi * r4**2
	cost4 = int(price4 / area4 * 1000)/1000.0
	print("The cost per square inch of the " + str(size4) + " inch pizza is $" + str(cost4))
	</code>
</div>

<p>
That is a lot of similar code repeated over and over. Let's design a function that will make this easier. We want to calculate the cost per square inch of pizzas with different sizes and different prices. The output of the function should be the cost per square inch. Because the size and price of each pizza can be different, we want both the size and the price to be the inputs of the function. The function will perform the process of calculating the cost per square inch given the size and the price of the pizza.
</p>

<p>
To start defining a function in Python, use the following syntax: <code>def <em>function_name</em>(<em>list_of_input_variables</em>):</code>. For example, we can use <code>def calculate_pizza_cost(size, price):</code> to define a function with a name of calculate_pizza_cost and inputs named size and price.
</p>
<p>
We have the function name and the input, now we need to define the process of the function, also known as the <em>body</em> of the function. In Python, the process starts on the next line of code, and every line of code in the process is tabbed in once. The process can access the input data by referring to the names of the input variables. Our process may look something like this:
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
	def calculate_pizza_cost(size, price):
		pi = 3.14159
		r = size / 2.0
		area = pi * r**2
		cost = int(price / area * 1000)/1000.0
	</code>
</div>

<p>
Notice that the process refers to both <code>size</code> and <code>price</code>. The function itself doesn't know the specific values of <code>size</code> and <code>price</code>, those are variables that are passed in from the outside when the function is called. Just like the <code>len</code> function works on any string you pass in as input, our function will work on any values of size and price that are passed in when the function is called.
</p>

<p>Now we have the name, the input, and the process. We now need to return output. We want to return the cost, which in this case is stored in the variable named <code>cost</code>. We do this using the syntax <code>return cost</code>:
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
	def calculate_pizza_cost(size, price):
		pi = 3.14159
		r = size / 2.0
		area = pi * r**2
		cost = int(price / area * 1000)/1000.0
		return cost
	</code>
</div>

<p>
Now we have a function that takes a size and price as input and returns the cost per square inch of the pizza. Now that we have a function, we need to call the function from the outside and pass in the input values. The values that get passed into the function will define the values of the <code>size</code> and <code>price</code> values in the function body:

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
	def calculate_pizza_cost(size, price):
		pi = 3.14159
		r = size / 2.0
		area = pi * r**2
		cost = int(price / area * 1000)/1000.0
		return cost

	size1 = 10
	price1 = 5.50
	cost1 = calculate_pizza_cost(size1, price1)
	print("The cost per square inch of the " + str(size1) + " inch pizza is $" + str(cost1))

	size2 = 12
	price2 = 7.00
	cost2 = calculate_pizza_cost(size2, price2)
	print("The cost per square inch of the " + str(size2) + " inch pizza is $" + str(cost2))

	size3 = 16
	price3 = 11.25
	cost3 = calculate_pizza_cost(size3, price3)
	print("The cost per square inch of the " + str(size3) + " inch pizza is $" + str(cost3))

	size4 = 20
	price4 = 15.25	
	cost4 = calculate_pizza_cost(size4, price4)
	print("The cost per square inch of the " + str(size4) + " inch pizza is $" + str(cost4))
	</code>
</div>

<p>
That code looks better, but we can use more functions to make it even better. The code repeats the call to calculate the cost and the print function multiple times. We can define another function called <code>print_cost</code> that takes the size and price as input, calls <code>calculate_pizza_cost</code> to get the cost, then prints the cost:
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
	def calculate_pizza_cost(size, price):
		pi = 3.14159
		r = size / 2.0
		area = pi * r**2
		cost = int(price / area * 1000)/1000.0
		return cost

	def print_cost(size, price):
		cost = calculate_pizza_cost(size, price)
		print("The cost per square inch of the " + str(size) + " inch pizza is $" + str(cost))

	size1 = 10
	price1 = 5.50
	print_cost(size1, price1)

	size2 = 12
	price2 = 7.00
	print_cost(size2, price2)

	size3 = 16
	price3 = 11.25
	print_cost(size3, price3)

	size4 = 20
	price4 = 15.25	
	print_cost(size4, price4)
	</code>
</div>

<p>
Now you may realize that we don't even need the variables for all the sizes and prices. We only refer to each of them one time to pass them in as input to the <code>print_cost</code> function, so we can just pass the values straight into the <code>print_cost</code> function instead:
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
	def calculate_pizza_cost(size, price):
		pi = 3.14159
		r = size / 2.0
		area = pi * r**2
		cost = int(price / area * 1000)/1000.0
		return cost

	def print_cost(size, price):
		cost = calculate_pizza_cost(size, price)
		print("The cost per square inch of the " + str(size) + " inch pizza is $" + str(cost))

	print_cost(10, 5.50)
	print_cost(12, 7.00)
	print_cost(16, 11.25)
	print_cost(20, 15.25)

	print_cost(40, 30.00)
	</code>
</div>

<p>
That code looks way better! And now if the pizza place decides to add another pizza size (like a 40-inch pizza for $30.00), the only code you have to change is to add one line that calls the <code>print_cost</code> function with the values for the new size and the associated price. Behold, the power of functions!
</p>

<p>
Now that you have seen some examples of using functions, it's time to do one on your own! In the <a href='?chapter=numbertypes'>Number Types chapter</a> you did an exercise to perform temperature conversions. Use the coding practice below to write two functions: one that converts a Fahrenheit temperature to a Celsius temperature (called <code>f_to_c</code>) and one that converts a Celsius temperature to a Fahrenheit temperature (called <code>c_to_f</code>). Use the following formulae:
</p>
<p>
<img src='images/temp_conv.gif'>
</p>
<p>
<img src='images/temp_conv2.gif'>
</p>
<p>
Where C is degrees Celsius and F is degrees Fahrenheit.
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
		# function f_to_c
		# input - fahrenheit temperature
		# return - celsius temperature

		# function c_to_f
		# input - celsius temperature
		# return - fahrenheit temperature

		# tests (don't change these)
		print(f_to_c(95))
		print(f_to_c(212))
		print(f_to_c(32))
		print(f_to_c(-40))
		print(f_to_c(78))

		# tests (don't change these)
		print(c_to_f(0))
		print(c_to_f(-40))
		print(c_to_f(35))
		print(c_to_f(100))
		print(c_to_f(29))
	</code>
	<code data-type="solution">
		# function f_to_c
		# input - fahrenheit temperature
		# return - celsius temperature
		def f_to_c(f):
			return (5.0/9.0) * (f - 32)

		# function c_to_f
		# input - celsius temperature
		# return - fahrenheit temperature
		def c_to_f(c):
			return (9.0/5.0) * c + 32

		# tests (don't change these)
		print(f_to_c(95))
		print(f_to_c(212))
		print(f_to_c(32))
		print(f_to_c(-40))
		print(f_to_c(27.5))

		# tests (don't change these)
		print(c_to_f(0))
		print(c_to_f(-40))
		print(c_to_f(35))
		print(c_to_f(100))
		print(c_to_f(29))
	</code>
	<code data-type="sct">
		test_output_contains("35.0\n100.0\n0.0\n-40.0\n-2.5\n32.0\n-40.0\n95.0\n212.0\n84.2", False, "Incorrect output")
	</code>
	<div data-type="hint">
		<code>c = (5.0/9.0) * (f - 32)</code>
		<code>f = (9.0/5.0) * c + 32</code>
	</div>
</div>
