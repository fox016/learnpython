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
TODO

<h2>Range Function</h2>
TODO
