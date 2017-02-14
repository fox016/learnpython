<p>
The last chapter mentioned two different kinds of numbers: ints and floats. This chapter is going to discuss the differences between the two types and what you as a programmer can do using number types.
</p>

<h2>Number Operations</h2>

<p>
Computers carry out commands by writing data to memory, reading data from memory, and performing calculations on that data. We have gone over how to write data to memory by defining variables, but we have yet to learn how to perform calculations on those numbers stored in memory. The type of the variable determines what kinds of calculations can be performed on it, and this section discusses the types of calculations that can be performed on number types. The table below shows a list of common operations on two numbers <code>x</code> and <code>y</code>.
</p>

<table class='textbookTable'>
	<thead>
		<tr><th colspan=2>Common Number Operations</th></tr>
		<tr><td>Operation</td><td>Result</td></tr>
	</thead>
	<tbody>
		<tr><td><code>x + y</code></td><td>Sum (addition)</td></tr>
		<tr><td><code>x - y</code></td><td>Difference (subtraction)</td></tr>
		<tr><td><code>x * y</code></td><td>Product (multiplication)</td></tr>
		<tr><td><code>x / y</code></td><td>Quotient (division)</td></tr>
		<tr><td><code>x // y</code></td><td>Quotient (division) rounded down to whole number</td></tr>
		<tr><td><code>x % y</code></td><td>Remainder of <code>x / y</code> (e.g., <code>19 % 5</code> is <code>4</code>)</td></tr>
		<tr><td><code>abs(x)</code></td><td>Absolute value of <code>x</code></td></tr>
		<tr><td><code>pow(x, y)</code></td><td>Exponent (<code>x</code> to the power <code>y</code>)</td></tr>
		<tr><td><code>x ** y</code></td><td>Exponent (<code>x</code> to the power <code>y</code>)</td></tr>
	</tbody>
</table>

<p>
Use the exercise below to play with these operations. Change the values of x and y to different integer and float values to see what difference it makes. (Note: If you set y as 0, you will get a division by 0 error.)
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
		x = 19
		y = 5

		num_sum = x + y
		diff = x - y
		prod = x * y
		quot = x / y
		quot_int = x // y
		rem = x % y
		abs_val = abs(x)
		exp = x ** y

		print("")
		print("x = " + str(x) + ", y = " + str(y))
		print(str(x) + " + " + str(y) + " = " + str(num_sum))
		print(str(x) + " - " + str(y) + " = " + str(diff))
		print(str(x) + " * " + str(y) + " = " + str(prod))
		print(str(x) + " / " + str(y) + " = " + str(quot))
		print(str(x) + " // " + str(y) + " = " + str(quot_int))
		print(str(x) + " % " + str(y) + " = " + str(rem))
		print("abs(" + str(x) + ") = " + str(abs_val))
		print(str(x) + " ** " + str(y) + " = " + str(exp))
	</code>
</div>

<h2>Being Careful with Types</h2>

<p>
For some versions of Python and for most programming languages, the types of the <em>operands</em> (the numbers operated on in math operations) will determine the type of the resulting value. For example, many programing languages will evaluate <code>12 / 5</code> as <code>2</code> instead of <code>2.4</code>. Why? Because <code>12</code> is an integer and <code>5</code> is an integer, so <code>12 / 5</code> returns an integer, <code>2</code>. If you know you want the output of a math operation to be a float, then it is a good idea to make at least one of the operands a float. For example, <code>12.0 / 5.0</code> will evaluate to <code>2.4</code>, as will <code>12.0 / 5</code> or <code>12 / 5.0</code>.
</p>

<h2>Mathematical Equations</h2>

<p>
Using number types and operations, you can code a mathematical <em>equation</em>. An equation performs operations on operands to produce a result. The coding activity above codes very basic equations: addition, subtraction, multiplication, etc. You can combine these basic operations to code more complex equations, such as calculating the area of a circle from its radius or calculating a Fahrenheit temperature given a Celcius value. Use the coding simulation below to play with some of these mathematical equations.
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
		# Area of a circle
		radius = 2.5
		pi = 3.14159
		area = pi * (radius ** 2)
		print("Radius: " + str(radius) + " m, Area: " + str(area) + " m^2")
		
		# Celsius to Fahrenheit converter
		celsius = 35.0
		fahrenheit = (9/5.0) * celsius + 32
		print("Celsius: " + str(celsius) + ", Fahrenheit: " + str(fahrenheit))

		# Calculate distance
		velocity_start = 2.0 # meters per second
		time = 10.0 # seconds
		acceleration = 1.5 # meters per second per second
		distance = (velocity_start * time) + (0.5 * acceleration * (time**2))
		print("Distance travelled: " + str(distance) + " meters")

		# Compare price per square inch of two pizzas
		diameter1 = 12.0 # inches
		radius1 = diameter1 / 2.0
		cost1 = 5.00 # dollars
		area1 = pi * (radius1 ** 2)
		cost_ratio1 = cost1 / area1
		print("Size: " + str(diameter1) + " in, Cost: $" + str(cost1) + ", Cost per square inch: $" + str(cost_ratio1))

		diameter2 = 16.0 # inches
		radius2 = diameter2 / 2.0
		cost2 = 7.25 # dollars
		area2 = pi * (radius2 ** 2)
		cost_ratio2 = cost2 / area2
		print("Size: " + str(diameter2) + " in, Cost: $" + str(cost2) + ", Cost per square inch: $" + str(cost_ratio2))
	</code>
</div>
