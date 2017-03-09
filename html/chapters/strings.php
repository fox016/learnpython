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

<h2>Substrings</h2>

<p>
A substring is a part of a string. If you are given a string in a variable named <code>address</code> with the value <code>"123 Rocky Road, Glace, LA 12345"</code> and you want to isolate the zip code, you need some way of isolating just the last five characters of the string. Substrings allow you to do just that: isolate parts of a string. It can be from the beginning, middle, or end of the string. It can be a single character from the string or a large number of characters.
</p>

<p>
There are many approaches that different programming languages take to offer this kind of functionality. Python's approach is an uncommon one, but easy to read and understand once you know the rules. To understand Python's approach to substrings, you must first understand a concept known as <em>0-based indexing</em>. Typically when we teach kids to count, we teach them to start at 1. This is an example of 1-based indexing, and we're very used to it. 0-based indexing starts counting at 0 instead of 1, which can be confusing at first and it might take some getting used to. To extract a substring in Python, you must know the index of both the starting character and the ending character of the range you want to include. Consider the following string:
</p>
<p>
<code>The quick red fox jumped over the lazy brown dogs.</code>
</p>
<p>
Strings use 0-based indexing. The "T" in "The" is at index 0. The "h" is at index 1, "e" at index 2, " " at index 3, and so on. If we wanted to cut out the substring "red fox", we would first have to know the index of the "r" in "red" and the index of the "x" in "fox". The "r" is at index 10, and the "x" at index 16. Now that we have those indexes, we need to know the syntax for extracting substrings in Python:
</p>
<p>
<code>substring = str_name[ <em>start index (inclusive)</em> : <em>end index (exclusive)</em> ]</code>
</p>
<p>
That might look a little intimidating at first, so let's break it down. After the opening bracket ([), insert the start index of the first character to include. In our example, that index is 10. Then put a colon (:). After the colon, insert the index of the first character to exclude. In our example, we want to include up to index 16, so the first character to exclude is at index 17:
</p>
<p>
<code>fox_string = "The quick red fox jumped over the lazy brown dogs."</code><br/>
<code>substring = fox_string[10:17]</code><br/>
<code>print(substring) # This prints out "red fox"</code><br/>
</p>

<p>
If you want the substring to start at the beginning, such as "The quick red fox", then you can use 0 as the starting index (<code>substring = fox_string[0:17]</code>) or just leave the start index blank (<code>substring = fox_string[:17]</code>). If you want the substring to end at the end of the original string, such as "lazy brown dogs.", then you can leave the end index blank (<code>substring = fox_string[34:]</code>).
</p>

<p>
The coding exercise below has a hidden string named <code>secret_string</code>. Follow the instructions in the comments to complete the exercise.
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="pre-exercise-code">
		secret_string = "ALGERNON: My dear Aunt Augusta, I mean he was found out! The doctors found out that Bunbury could not live, that is what I mean. So Bunbury died. LADY BRACKNELL: He seems to have had great confidence in the opinion of his physicians. I am glad, however, that he made up his mind at the last to some definite course of action, and acted under proper medical advice."
	</code>
	<code data-type="sample-code">
		#Print the first 145 characters of secret_string (index 0 to 144)

		#Print secret_string starting at index 146 to the end

		#Print secret_string from index from index 57 to index 232 (include index 232)
	</code>
	<code data-type="solution">
		#Print the first 145 characters of secret_string (index 0 to 144)
		print(secret_string[:145])

		#Print secret_string starting at index 146 to the end
		print(secret_string[146:])

		#Print secret_string from index 57 to index 232 (include index 232)
		print(secret_string[57:233])
	</code>
	<code data-type="sct">
		test_output_contains("ALGERNON: My dear Aunt Augusta, I mean he was found out! The doctors found out that Bunbury could not live, that is what I mean. So Bunbury died.\nLADY BRACKNELL: He seems to have had great confidence in the opinion of his physicians. I am glad, however, that he made up his mind at the last to some definite course of action, and acted under proper medical advice.\nThe doctors found out that Bunbury could not live, that is what I mean. So Bunbury died. LADY BRACKNELL: He seems to have had great confidence in the opinion of his physicians.", False, "Check your indexes!")
		success_msg("Great job!")
	</code>
	<div data-type="hint">
		Remember that the number after the colon is the first character to exclude. To include index 232, use the number 233 after the colon.
	</div>
</div>

<h2>Common String Functions</h2>

<table class='textbookTable'>
	<thead>
		<tr><th colspan=2>Common String Functions</th></tr>
		<tr><td>Function</td><td>Result</td></tr>
	</thead>
	<tbody>
		<tr><td>len(<em>string</em>)</td><td>Returns the length of the string as a number</td></tr>
		<tr><td></td><td>len("The") = 3</td></tr>
		<tr><td><em>string</em>.lower()</td><td>Returns the string all lowercase</td></tr>
		<tr><td><td>"I like learning about FERPA in France".lower() = "i like learning about ferpa in france."</td></tr>
		<tr><td><em>string</em>.upper()</td><td>Returns the string all uppercase</td></tr>
		<tr><td><td>"I like learning about FERPA in France".upper() = "I LIKE LEARNING ABOUT FERPA IN FRANCE."</td></tr>
		<tr><td><em>string</em>.replace(<em>substring</em>, <em>new</em>)</td><td>Returns the string with all cases of <em>substring</em> replaced with <em>new</em></td></tr>
		<tr><td><td>"I like learning about FERPA in France".replace("France", "Paris") = "I like learning about FERPA in Paris."</td></tr>
	</tbody>
</table>

<p>
Use the coding exercise below to play around with these functions to learn more about how they work.
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
		tweet = "I like learning about FERPA in France."

		print(tweet)
		print(len(tweet))

		# Print lower case
		print(tweet.lower())

		# Print upper case
		print(tweet.upper())

		# Replace 'France' with 'Paris'
		print(tweet.replace("France", "Paris"))

		# Print last 7 characters
		print(tweet[len(tweet)-7:])

		# Replace 'France' with 'Paris'
		# Then print length
		# Then print last 6 characters
		paris = tweet.replace("France", "Paris")
		print(len(paris))
		print(paris[len(paris)-6:])

		# Make lower case
		# Then replace 'france' with 'paris'
		# Then print it all upper case
		print(tweet.lower().replace("france", "paris").upper())
	</code>
</div>

<h2>Review</h2>

<p>
Concatenate strings using the + operator: <code> "Hello, " + "World!"</code><br/>
Use the functions <code>int</code>, <code>long</code>, or <code>float</code> to convert a string to a number type: <code>num_input = int(string_input)</code><br/>
Use the <code>str</code> function to convert a number type into a string: <code>string_output = str(num_output)</code><br/>
Use brackets to extract a substring from a string: <code>substring = my_string[3:27]</code> (returns indexes 3 to 26, inclusive)<br/>
Use the <code>len</code> function to get the length of a string: <code>print(len("hello"))</code> (5)<br/>
Use the <code>lower</code> function to get a lowercase copy of the string: <code>lower_my_str = my_str.lower()</code><br/>
Use the <code>upper</code> function to get a uppercase copy of the string: <code>upper_my_str = my_str.upper()</code><br/>
Use the <code>replace</code> function to find/replace parts of a string: <code>tweet = "I love you".replace("love", "don't need")</code><br/>
</p>

<p>
The exercise below has a hidden string named <code>secret_string</code>. It is a 10-digit phone number (e.g. 1234567890) followed by a space (" ") and then a person's name.
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="pre-exercise-code">
		secret_string = "8012248219 Michael Jackson"
	</code>
	<code data-type="sample-code">
		# Define variable total_length to be the length of secret_string
		total_length = 0
		print(total_length)

		# Define variable name_length to be the length of the name
		# Hint: subtract 11 from the total length
		name_length = 0
		print(name_length)

		# Define variable phone as just the phone number
		phone = secret_string[:]
		print(phone)

		# Define variable name as just the name
		name = secret_string[:]
		print(name)

		# Define variable lower_name as the name all lower case
		lower_name = name
		print(lower_name)

		# Define variable upper_name as the name all upper case
		upper_name = name
		print(upper_name)
	</code>
	<code data-type="solution">
		# Define variable total_length to be the length of secret_string
		total_length = len(secret_string)
		print(total_length)

		# Define variable name_length to be the length of the name
		name_length = total_length - 11
		print(name_length)

		# Define variable phone as just the phone number
		phone = secret_string[:10]
		print(phone)

		# Define variable name as just the name
		name = secret_string[11:]
		print(name)

		# Define variable lower_name as the name all lower case
		lower_name = name.lower()
		print(lower_name)

		# Define variable upper_name as the name all upper case
		upper_name = name.upper()
		print(upper_name)

		# Define variable nickname as name with the "chael" replaced with "ke"
		nickname = name.replace("chael", "ke")
		print(nickname)
	</code>
	<code data-type="sct">
		test_object("total_length")
		test_object("name_length")
		test_object("phone")
		test_object("name")
		test_object("lower_name")
		test_object("upper_name")
		test_object("nickname")
		test_output_contains("26\n15\n8012248219\nMichael Jackson\nmichael jackson\nMICHAEL JACKSON\nMike Jackson", False, "Incorrect output")
		success_msg("Great job!")
	</code>
	<div data-type="hint">
		<ul>
			<li>Subtract 11 from total_length to get name length (10 character phone number and 1 character space)</li>
			<li>The phone number is from index 0 to index 9, inclusive</li>
			<li>The name starts at index 11 and goes to the end of secret_string</li>
		</ul>
	</div>
</div>
