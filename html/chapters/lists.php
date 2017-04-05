<p>
A list is a simple concept that can provide a lot of power in the world of computer programming. This chapter will cover some of the basics about lists. Lists will be covered more in depth in later chapters (especially the chapter on loops) as related topics are explored.
</p>

<p>
A list, known in some programming languages as an <em>array</em> or a <em>vector</em>, is simply a list of related data stored under a single variable name. Instead of using code like this:
</p>
<pre><code>name1 = "Bob"
name2 = "Sue"
name3 = "Jeff"
name4 = "Sally"

print(name1)
print(name2)
print(name3)
print(name4)</code></pre>
<p>
You can use code like this:
</p>
<pre><code>names = ["Bob", "Sue", "Jeff", "Sally"]

print(names[0])
print(names[1])
print(names[2])
print(names[3])</code></pre>
<p>
In the last code block, the variable <code>names</code> is of type <code>list</code>. So a list is just another data type, just like ints, floats, strings, and booleans are different data types. In this case, <code>names</code> is a list of strings containing four values. All four of these values are names. They might be names of students in a classroom or a list of friends on Facebook or Twitter. Lists are useful for storing data that is related in some way.
</p>

<h2>Using a List Index</h2>

<p>
The last code block uses syntax like <code>names[0]</code>. You might remember similar syntax from the <a target='_blank' href='./?chapter=strings'>chapter on strings</a> where the square brackets [] can be used to get a character from a string. You might also remember that strings are 0-indexed, meaning that the position of the first character in a string is position 0. Lists work the same way. The list <code>names</code> has four values, so it has indexes 0, 1, 2, and 3. You can use indexes to get data (such as <code>print(names[0])</code>) or to set data (such as <code>names[0] = "Alice"</code>). Use the coding exercise below to practice using lists and indexes.
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
		def print_person(name, age):
			print(name + " is " + str(age) + " years old")

		names = ["Bob", "Sue", "Jeff", "Sally", "Ryan", "Jeff"]
		ages = [14, 16, 13, 13, 17, 11]
		print(names)
		print(ages)

		print_person(names[0], ages[0])
		print_person(names[1], ages[1])
		print_person(names[2], ages[2])
		print_person(names[3], ages[3])
		print_person(names[4], ages[4])
		print_person(names[5], ages[5])

		names[0] = "Jordan"
		ages[0] = 97
		print(names)
		print(ages)

		print_person(names[0], ages[0])
	</code>
</div>

<h2>Common List Functions</h2>

<table class='textbookTable'>
	<thead>
		<tr><th colspan=2>Common List Functions</th></tr>
		<tr><td>Function</td><td>Result</td></tr>
	</thead>
	<tbody>
		<tr><td><em>list</em>.append(<em>value</em>)</td><td>Adds <em>value</em> to the end of <em>list</em></td></tr>
		<tr><td><em>list</em>.insert(<em>position</em>, <em>value</em>)</td><td>Inserts <em>value</em> into <em>list</em> at index <em>position</em></td></tr>
		<tr><td><em>list</em>.remove(<em>value</em>)</td><td>Removes the first instance of <em>value</em> from <em>list</em></td></tr>
		<tr><td><em>list</em>.pop()</td><td>Removes the last value from <em>list</em> and returns that value</td></tr>
		<tr><td><em>list</em>.index(<em>value</em>)</td><td>Returns the index of the first instance of <em>value</em>, does not change <em>list</em></td></tr>
		<tr><td>len(<em>list</em>)</td><td>Returns the total number of values in <em>list</em>, does not change <em>list</em></td></tr>
		<tr><td><em>list</em>.count(<em>value</em>)</td><td>Returns the number of times <em>value</em> is found in <em>list</em>, does not change <em>list</em></td></tr>
		<tr><td><em>list</em>.sort()</td><td>Sorts the items in <em>list</em></td></tr>
		<tr><td><em>list</em>.reverse()</td><td>Reverses the order of the items in <em>list</em></td></tr>
		<tr><td><em>str</em>.join(<em>list</em>)</td><td>Returns a string containing all the values in <em>list</em>, each value separated by <em>str</em></td></tr>
		<tr><td><em>str</em>.split(<em>separator</em>)</td><td>Returns a list containing all the values in <em>str</em> broken up by <em>separator</em></td></tr>
	</tbody>
</table>

<p>Use the exercise below to play with these list functions.</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
		names = ["Bob", "Sue"]
		print(names)

		names.append("Rob")
		print(names)

		names.insert(0, "Steve")
		print(names)

		names.insert(1, "Sue")
		print(names)

		names.remove("Sue")
		print(names)

		last = names.pop()
		print(last + " was removed from the end of the list by the pop function")
		print(names)

		index = names.index("Sue")
		print("Sue is at index " + str(index))

		names.append("Jake")
		names.append("Sue")
		names.append("Rob")
		names.append("Steve")
		names.append("Steve")
		names.append("Rob")
		print(names)

		steve_count = names.count("Steve")
		print("Steve appears " + str(steve_count) + " times")

		names.sort()
		print(names)

		names.reverse()
		print(names)

		print(",".join(names))
		print(", ".join(names))
		print("|".join(names))
		print(" | ".join(names))

		string_data = "Alice, Bob, Jack, Jill, Eve, Steven, Tommy"
		list_data = string_data.split(", ")
		print(string_data)
		print(list_data)
	</code>
</div>


<h2>Splitting Lists (Sublists)</h2>

<p>
In Python, splitting lists is done in the same way as splitting strings into substrings. You can review the <a target="_blank" href="./?chapter=strings">chapter on strings</a> for a more detailed explanation. Python uses some of the same syntax for lists and strings because strings, in a way, are really just lists of characters. The syntax is
</p>

<p>
<code>
sublist = list_name[ <em>start_index(inclusive)</em> : <em>end_index(exclusive)</em> ]
</code>
</p>

<p>
Use the exercise below to experiment with splitting lists
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
		colors = ["red", "orange", "yellow", "green", "blue", "purple"]
		warm_colors = colors[0:3]
		cool_colors = colors[3:len(colors)]
		fav_colors = colors[3:5]
		fav_colors.append("teal")

		print(colors)
		print(warm_colors)
		print(cool_colors)
		print(fav_colors)
	</code>
</div>

<h2>Range Function</h2>

<p>
The <code>range</code> function in Python can be used as a shortcut to generate a list of numbers. This is a very useful function and will show up in later chapters. There are three different ways to call the <code>range</code> function:
</p>

<pre><code>range(10) # Returns a list from 0 to 9
range(5, 10) # Returns a list from 5 to 9
range(10, 100, 2) # Returns a list of all even numbers from 10 to 98</code></pre>

<p>
The first example defines an exclusive ending point. The list starts at 0 and includes every number less than the ending point. The second defines an inclusive starting point and an exclusive ending point. The third defines an inclusive starting point, an exclusive ending point, and an interval between every adjacent number in the list. Use the exercise below to experiment with the <code>range</code> function. You will want to be very familiar with it; it will help a lot as you continue to learn Python.
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
		indexes = range(1) # Change to be a list of 0 to 10 (inclusive)
		dice = range(1) # Change to be a list of 1 to 6 (inclusive)
		fives = range(1) # Change to be a list of all multiples of 5 from 5 to 100 (inclusive)

		# Don't change these print statements
		print(", ".join(map(str, indexes)))
		print(", ".join(map(str, dice)))
		print(", ".join(map(str, fives)))
	</code>
	<code data-type="solution">
		indexes = range(11) # Change to be a list of 0 to 10 (inclusive)
		dice = range(1, 7) # Change to be a list of 1 to 6 (inclusive)
		fives = range(5, 101, 5) # Change to be a list of all multiples of 5 from 5 to 100 (inclusive)

		# Don't change these print statements
		print(", ".join(map(str, indexes)))
		print(", ".join(map(str, dice)))
		print(", ".join(map(str, fives)))
	</code>
	<code data-type="sct">
		test_object("indexes")
		test_object("dice")
		test_object("fives")
		success_msg("Great job!")
	</code>
	<div data-type="hint">
		<ul>
			<li>For indexes, input one parameter</li>
			<li>For dice, input two parameters</li>
			<li>For fives, input three parameters</li>
		</ul>
	</div>
</div>

<h2>Review</h2>

<p>
For this exercise, there are 2 hidden lists: <code>cities</code> and <code>states</code>. Follow the instructions in the comments to manipulate these lists and print the values.
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="pre-exercise-code">
		cities = ["Salem", "Salt Lake City", "Houston", "Miami", "San Diego"]
		states = ["MA", "UT", "TX", "FL", "CA"]
	</code>
	<code data-type="sample-code">
		def print_city(city, state):
			print(city + ", " + state)

		# Append "Chicago" to cities and "IL" to states

		# Insert "Atlanta" into cities at index 2

		# Insert "GA" into states at index 2

		# Remove "Salem" from cities and "MA" from states

		# Call the print_city function on all 6 values in cities and states
	</code>
	<code data-type="solution">
		def print_city(city, state):
			print(city + ", " + state)

		# Append "Chicago" to cities and "IL" to states
		cities.append("Chicago")
		states.append("IL")

		# Insert "Atlanta" into cities at index 2
		# Insert "GA" into states at index 2
		cities.insert(2, "Atlanta")
		states.insert(2, "GA")

		# Remove "Salem" from cities and "MA" from states
		cities.remove("Salem")
		states.remove("MA")

		# Call the print_city function on all 6 values in cities and states
		print_city(cities[0], states[0])
		print_city(cities[1], states[1])
		print_city(cities[2], states[2])
		print_city(cities[3], states[3])
		print_city(cities[4], states[4])
		print_city(cities[5], states[5])
	</code>
	<code data-type="sct">
		test_object("cities")
		test_object("states")
	</code>
	<div data-type="hint">
		Use functions append, insert, and remove
	</div>
</div>
