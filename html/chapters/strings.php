<p>
The chapter on <a href='?chapter=variables'>variables</a> dicussed three different basic data types: numbers, booleans, and strings. The string data type is more complex and has more built-in operations than the number and boolean types that have been covered. This chapter will only cover the essentials of working with strings. For a more complete reference, refer to the <a target='_blank' href='https://docs.python.org/2/library/string.html'>Python documentation</a>.
</p>

<h2>What is a String?</h2>

<p>
A string is a list of symbols. In the world of computing, these symbols are commonly referred to as <em>characters</em>. Characters in a string can be letters, numbers, punctuation, special characters (such as ~@#$%^*()[]{}-=_+/\|&gt;&lt;), and more. Strings are used to hold all kinds of textual data such as user input from the keyboard, names of people and places, instructions, email addresses, etc. This text that you are currently reading on your computer screen is stored in your computer's memory as a string. Strings are defined in code by wrapping double quotes (") or single quotes (') around the string data. Here are some examples:
</p>

<p>
<code>name = "Bob the Builder"</code><br/>
<code>occupation = "Builder"</code><br/>
<code>salary = "$35,000"</code><br/>
<code>phone = "(123) 456-7890"</code><br/>
<code>email = "builder_bob@nowhere.net"</code><br/>
<code>phrase = "Let's build it!"</code><br/>
<code>favorite_quote = '"One small step for man; one giant leap for for mankind." - Neal Armstrong'</code><br/>
</p>

<p>
When strings are printed to the screen, the outer quotes are not shown. For example, the command <code>print("Welcome, Bob!")</code> will show as <code>Welcome, Bob!</code> in the output console.
</p>

<h2>String Concatenation</h2>

<p>
Strings can be added together to create bigger strings. For example, <code>"Hello, " + "World!" = "Hello, World!</code>. Adding one string onto another is also known as <em>concatenating</em> or <em>appending</em>.
</p>

<p>
Notice that the operation for string concatenation is <code>+</code>, just like the operation for number addition. <code>1 + 1 = 2</code>, but <code>"1" + "1" = "11"</code>. This is one of the reasons why it is so important to understand variables and data types; using the same code with different data types can produce different results. Sometimes it can get confusing if you're not careful to understand the data types of your variables. For this reason, not every programming language uses the <code>+</code> for string contatenation, but Python and JavaScript both do.
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
		favorite_quote = '"One small step for man; one giant leap for for mankind." - Neal Armstrong'
		print(favorite_quote)
		print("Welcome, Bob!")
		print("Hello, " + "World!")
		print(1 + 1)
		print("1" + "1")
	</code>
</div>

<h2>Type Conversion</h2>

<p>
It's important for a programmer to be able to go back and forth between data types. Consider the following example: You want to write a program that asks the user to enter two numbers on the keyboard. You store these two numbers in two different variables, <code>input1</code> and <code>input2</code>. The program will then add <code>input1</code> and <code>input2</code> together. Assuming <code>input1</code> is 3 and <code>input2</code> is 5, the program will then print out a response like <code>3 + 5 = 8</code>.
</p>

<p>
The data that the user enters from the keyboard will initially be stored as string data. That means that <code>input1</code> and <code>input2</code> will both be strings, just because that's how keyboard input is stored. So if you try to add <code>input1</code> to <code>input2</code>, you'll end up just concatenating the strings instead of performing number addition. First, you'll need to convert the two numbers from strings to a number type, then perform the addition. Then you'll need to convert the result back to a string so that it can be printed out as part of the response.
</p>

<p>
There are three functions that can be used to convert string data to number data: int, float, and long. You can use <code>int(input1)</code> to convert the string <code>input1</code> to an integer. Similarly, you can use <code>float(input1)</code> to convert the string <code>input1</code> to a float. The <code>long</code> data type is used for integers that are really big (bigger than 4,294,967,295), so if you expect users to enter in really big numbers with no decimal, use <code>long(input1)</code> to convert the string <code>input1</code> to a long.
</p>

<p>
To convert number data to string data, use str. You can use <code>str(num1)</code> to convert any number <code>num1</code> to a string.
</p>

<p>
When you use these type conversion functions, you can store the result in a new variable or just use it as it is. TODO 
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
		# Input from user, do not change
		input1 = "39526"
		input2 = "60473"

		# You should convert input1 and input2 to numbers before doing the addition
		sum1 = input1 + input2

		# If sum1 is a number type, it needs to be converted to a string before printing it
		print(input1 + " + " + input2 + " = " + sum1)
	</code>
	<code data-type="solution">
		# Input from user, do not change
		input1 = "39526"
		input2 = "60473"

		# You should convert input1 and input2 to numbers before doing the addition
		sum1 = int(input1) + int(input2)

		# If sum1 is a number type, it needs to be converted to a string before printing it
		print(input1 + " + " + input2 + " = " + str(sum1))
	</code>
	<code data-type="sct">
		test_object("input1")
		test_object("input2")
		test_output_contains("39526 + 60473 = 99999", False, "Output should show results of number addition")
		success_msg("Great job!")
	</code>
	<div data-type="hint">
		<code>sum1 = int(input1) + int(input2)</code><br/>
		<code>print(input1 + " + " + input2 + " = " + str(sum1))</code>
	</div>
</div>

<h2>Substring</h2>

<p>TODO from beginning, to end, from start index to end index</p>

<h2>Common String Functions</h2>

<p>TODO upper, lower, replace</p>

<h2>Review</h2>

<p>TODO review</p>
