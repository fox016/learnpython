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
	index = index + 1
print("done")</code></pre>

<p>
The first time through this loop, index is 0. 0 is less than <code>len(names)</code>, so the conditional statement evaluates as <code>true</code>, meaning the loop executes. The body of the loop prints <code>names[0]</code>, then index is set to 1. 1 is less than <code>len(names)</code>, so the loop executes again because the condition <code>index < len(names)</code> is still true. The body of the loop prints <code>names[1]</code>, then index is set to 2. 2 is not less than <code>len(names)</code>, so the loop won't run again because the condition <code>index < len(names)</code> is finally false. The loop will exit and the program will print "done".
</p>

<p>
While loops can do more than iterate through lists. You can use the conditional statement of a while loop for many purposes. You can create a countdown like this:
</p>

<pre><code>from time import sleep # this let's me use the sleep function

n = 10
while n > 0:
	print(str(n) + " seconds left"
	sleep(1) # wait for 1 second
	n = n-1
print("blast off!")</code></pre>

<p>
This code will print the number 10, wait one second, set <code>n</code> to 9, print 9, wait one second, and follow that pattern until the loop prints 1 and sets <code>n</code> to 0. Once <code>n</code> is set to 0, the conditional <code>while n &gt; 0</code> will return false and the loop will exit and the program will print "blast off!".
</p>

<h2>Break and Continue Statements</h2>

Within a loop, you can use <code>break</code> and <code>continue</code> statements for finer control over when the loop should exit. These statements should be used sparingly. The best way to control a while loop is to use a well thought out conditional statement, and the best way to control a for loop is to use a well thought out list to iterate over.

<p>
The <code>break</code> statement makes the loop stop early. It exits the loop and the program continues running the rest of the code. This might be useful if you're looking through a list for something specific and you want the loop to stop once you find what you're looking for. Use the following exercise to explore this idea.
</p> 

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
	names = ["Rob", "Kyle", "Sara", "Bill", "Sandy", "Cindy"]
	b_name = False
	for name in names:
		print("Look at name " + name)
		if name[0] == "B":
			b_name = name
			break # what happens if you remove this?
	if b_name:
		print("Found name that starts with B: " + b_name)
	else:
		print("No name that starts with B was found")
	</code>
</div>

How does this code using a for loop and a break statement compare to this code using a while loop?

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
	names = ["Rob", "Kyle", "Sara", "Bill", "Sandy", "Cindy"]
	index = 0
	while index < len(names) and names[index][0] != "B":
		print("Look at name " + names[index])
		index += 1
	if index >= len(names):
		print("No name that starts with B was found")
	else:
		print("Found name that starts with B: " + names[index])
	</code>
</div>

So in this case, you can use a while loop without a break statement instead of a for loop with a break statement to do the same thing. Use whatever method makes more sense to you. If the for loop with the break statement is easier to read and understand, then use it. Otherwise, use the while loop approach.

<p>
The <code>continue</code> statement can be harder to understand. It tells the loop to skip the current value but to continue running the loop for the next value. For example, assume you have a list of people at a party. You want everyone to say "hi" to everyone else, but nobody to say "hi" to themselves. Use the exercise below to experiment with this principle.
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
	names = ["Rob", "Kyle", "Sara", "Bill", "Sandy", "Cindy"]
	for person1 in names:
		for person2 in names:
			# if the same person, skip and go to the next person
			if person1 == person2:
				continue # what happens if you change this to a break statement?
			print(person1 + ' needs to say "hi" to ' + person2)
	</code>
</div>

<h2>Review</h2>

For the exercise below, there is a secret list of strings named <code>sentences</code>. For each sentence, first print the sentence. Then break the sentence into words (there is only one space between each word) and print out each word individually). Then go on to the next sentence.

<div data-datacamp-exercise data-lang="python">
	<code data-type="pre-exercise-code">
		sentences = ["I like using loops", "Pythons are dangerous snakes", "What's that blue thing doing here?", "Everybody wants prosthetic foreheads on their real heads"]
	</code>
	<code data-type="sample-code">
	for sentence in sentences:
		print(sentence)
		# for each word in sentence, print it
	</code>
	<code data-type="solution">
	for sentence in sentences:
		print(sentence)
		# for each word in sentence, print it
		for word in sentence.split(" "):
			print(word)
	</code>
	<code data-type="sct">
		test_output_contains("I like using loops\nI\nlike\nusing\nloops\nPythons are dangerous snakes\nPythons\nare\ndangerous\nsnakes\nWhat's that blue thing doing here?\nWhat's\nthat\nblue\nthing\ndoing\nhere?\nEverybody wants prosthetic foreheads on their real heads\nEverybody\nwants\nprosthetic\nforeheads\non\ntheir\nreal\nheads", False, "Wrong output")
	</code>
	<div data-type="hint">
		Remember the <code><em>list</em>.split(<em>str</em>)</code> function
	</div>
</div>
