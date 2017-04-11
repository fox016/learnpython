In the <a target='_blank' href='?chapter=lists'>chapter on lists</a>, the following block of code was used to show how lists can be used to store multiple variables and save coding space:
<pre><code>names = ["Bob", "Sue", "Jeff", "Sally"]

print(names[0])
print(names[1])
print(names[2])
print(names[3])</code></pre>

<p>
But what if, instead of a list of 4 names, it was a list of 100 names? Nobody wants to type out <code>print(names[0])</code> to <code>print(names[99])</code>. What if it was a list of 1000 names? What if you read the list of names from a file and you don't even know how long the list is until your code is already running? Loops can be used to <em>iterate</em> over lists and perform the same action for each element in the list. Loops can also be used to repeat a block of code multiple times. This chapter will discuss <code>for</code> loops and <code>while</code> loops and how to use them to make you a more efficient coder.
</p>

<h2>For Loops</h2>
For loops are typically the best type of loop to use when iterating over items in a list. A for loop in Python uses the following syntax:

<pre><code>for <em>item_variable</em> in <em>list</em>:
	# perform action on <em>item_variable</em></code></pre>

The <code>item_variable</code> can be any variable name that the programmer wants to use. In the <em>body</em> of the loop (the code that is tabbed in under the for statment), the programmer can use that variable name to refer to each item in the list. Using the example above, a loop to print all names in a list of names might look something like this:

<pre><code>names = ["Bob", "Sue", "Jeff", "Sally"]
for name in names:
	print(name)</code></pre>

In this example, <code>name</code> is a variable that the programmer defines to use in the body of the loop to refer to each object in the list. Any variable name can be used. The following code does the exact same thing:

<pre><code>names = ["Bob", "Sue", "Jeff", "Sally"]
for x in names:
	print(x)</code></pre>

Instead of <code>name</code>, the programmer defines <code>x</code> as the variable to use in the body of the loop to refer to each object in the list <code>names</code>.

<p>
This is often the syntax that Python programmers use to iterate over the items of a list, but many other programming languages don't offer this syntax where the programmer can define an <code>item_variable</code> that represents each item in the list. Instead, many programming languages allow programmers to iterate over a list of numbers that are indexes of the items in the list. You can do this in Python, too. For example:
</p>

<pre><code>names = ["Bob", "Sue", "Jeff", "Sally"]
for index in range(0, len(names)):
	print(names[index])</code></pre>

In this case, the list is created by the <code>range</code> function. It starts at 0 and includes every number less than the length of the list <code>names</code>, which means that it contains every index of the list <code>names</code>. Then the body of the loop uses <code>names[index]</code> to refer to each item in the list <code>names</code>.

<p>
Using a loop over a list of indexes may be a good idea if multiple arrays are involved. For example, what if you have a list of names and a list of ages and you want to print out the name and age of everyone in the list? Looping over the index allows you to access the <code>names</code> list and the <code>ages</code> list at the same index. Use the exercise below to see how looping over two lists using an index loop works.
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
		# Change the lists of names and ages
		names = ["Bob", "Sue", "Jeff", "Sally"]
		ages = [12, 17, 8, 21]

		if(len(names) != len(ages)):
			print("The lists names and ages must have the same length")
		else:
			for index in range(0, len(names)):
				print(names[index] + " is " + str(ages[index]) + " years old")
	</code>
</div>

Use the exercise below to test your knowledge of using for loops. There are two hidden lists, <code>sizes</code> and <code>prices</code>. They are the same length. For any <code>index</code> in <code>range(0, len(sizes))</code>, <code>sizes[index]</code> represents the diameter of a pizza and <code>prices[index]</code> represents the price of that pizza. Create a list named <code>costs</code> that is the same length, where <code>costs[index]</code> is the cost per square inch of the pizza.

<div data-datacamp-exercise data-lang="python">
	<code data-type="pre-exercise-code">
		sizes = [10, 12, 16, 20, 30, 40, 50]
		prices = [5.50, 7.00, 11.25, 15.25, 25.00, 40.00, 55.55]
	</code>
	<code data-type="sample-code">
	# Don't change this function
	def calculate_pizza_cost(size, price):
		pi = 3.14159
		r = size / 2.0
		area = pi * r**2
		cost = int(price / area * 1000)/1000.0
		return cost

	# Create a list named costs where costs[index] = calculate_pizza_cost(sizes[index], prices[index])
	costs = []

	# Don't change this code
	if len(costs) != len(sizes):
		print("Costs has " + str(len(costs)) + " values, it should have " + str(len(sizes)) + " values")
	else:
		for index in range(0, len(sizes)):
			print("Size: " + str(sizes[index]) + ", Price: $" + str(prices[index]) + ", Cost per square-inch: $" + str(costs[index]))
	</code>
	<code data-type="solution">
	# Don't change this function
	def calculate_pizza_cost(size, price):
		pi = 3.14159
		r = size / 2.0
		area = pi * r**2
		cost = int(price / area * 1000)/1000.0
		return cost

	# Create a list named costs where costs[index] = calculate_pizza_cost(sizes[index], prices[index])
	costs = []
	for index in range(0, len(sizes)):
		costs.append(calculate_pizza_cost(sizes[index], prices[index]))

	# Don't change this code
	if len(costs) != len(sizes):
		print("Costs has " + str(len(costs)) + " values, it should have " + str(len(sizes)) + " values")
	else:
		for index in range(0, len(sizes)):
			print("Size: " + str(sizes[index]) + ", Price: $" + str(prices[index]) + ", Cost per square-inch: $" + str(costs[index]))
	</code>
	<code data-type="sct">
		test_object("sizes")
		test_object("prices")
		test_object("costs")
	</code>
	<div data-type="hint">
		Remember the <code>append</code> or <code>insert</code> functions for lists
	</div>
</div>

<h2>While Loops</h2>

While loops use some conditional statement to determine how many times to execute the loop body. The syntax looks like this:

<pre><code>while <em>conditional_statement</em>:
	# Run this code</code></pre>

You can use a while loop to do an index loop through a list, though most programmers prefer for loops. To use a while loop to iterate through a list, you can use this pattern:
<pre><code>index = 0
names = ["Bob", "Sue"]
while index < len(names):
	print(names[index])
	index = index + 1</code></pre>

The first time through this loop, index is 0. 0 is less than <code>len(names)</code>, so the loop executes. The body of the loop prints <code>names[0]</code>, then index is set to 1. 1 is less than <code>len(names)</code>, so the loop executes again because the condition <code>index < len(names)</code> is still true. The body of the loop prints <code>names[1]</code>, then index is set to 2. 2 is not less than <code>len(names)</code>, so the loop won't run again because the condition <code>index < len(names)</code> is finally false.


<h2>Break and Continue Statements</h2>
Using 'break' and 'continue'
