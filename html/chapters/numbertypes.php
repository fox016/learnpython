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
		<tr><td><code>x // y</code></td><td>Quotient (division) as an integer (decimal value dropped)</td></tr>
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
