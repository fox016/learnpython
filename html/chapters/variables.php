<p>
As stated in the previous chapter, coding is writing commands for a computer to execute. Computers carry out commands by writing data to memory, reading data from memory, and performing calculations on that data. Programmers can tell a computer to write data to memory by defining <em>variables</em>. A variable is a name that is tied to a value that can be changed (hence the term "variable"&mdash;the value can vary). Common types of values include numbers (e.g., 42, 3.14159), strings of text (e.g., "Hello, world!", "Python is fun and easy to learn!"), and booleans (i.e. True or False). Python assigns values to variable names using the following syntax:
</p>
<p>
	<code>my_num = 42</code><br/>
	<code>my_str = "Hello, world!"</code><br/>
	<code>my_bool = True</code><br/>
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="pre-exercise-code">
	</code>
	<code data-type="sample-code">
		# Change my_num to 3.14159
		my_num = 42

		# Change my_str to "This is my string"
		my_str = "Hello, world!"

		# Change my_bool to False
		my_bool = True

		# Print variable values
		print(my_num)
		print(my_str)
		print(my_bool)
	</code>
	<code data-type="solution">
		# Change my_num to 3.14159
		my_num = 3.14159

		# Change my_str to "This is my string"
		my_str = "This is my string"

		# Change my_bool to False
		my_bool = False

		# Print variable values
		print(my_num)
		print(my_str)
		print(my_bool)
	</code>
	<code data-type="sct">
		test_object("my_num")
		test_object("my_str")
		test_object("my_bool")
		test_function("print")
		success_msg("Great job!")
	</code>
	<div data-type="hint">
		Change the value of <code>my_num</code> to <code>3.14159</code>, <code>my_str</code> to <code>"This is my string"</code>, and <code>my_bool</code> to <code>False</code>
	</div>
</div>

<h2>Variable Names</h2>

<p>
In the first example above, the name of the variable is "my_num" (short for "my number"). The value is the number 42. Variable names in Python must follow the following rules:
</p>
<ul>
	<li>Variable names must start with a letter or an underscore</li>
	<li>The rest of the name can contain letters, numbers, and underscores</li>
	<li>Names are case-sensitive (e.g., "my_Num" and "my_num" are different variables)</li>
</ul>
<p>
Notice that variable names cannot contain spaces. For example, <code>employee age = 42</code> is not valid. To make variable names that are made of multiple words, programmers can use underscores (e.g., <code>employee_age = 42</code>) or camel case (e.g., <code>employeeAge = 42</code>). Python style guides suggest using underscores to separate chunks of multi-word variable names, but some other languages suggest camel case.
</p>

<h2>Variable Types</h2>

<p>
As previously mentioned, common types of variable values include numbers, strings, and booleans. Numbers are divided into different types, the two most common types being int and float. An int is an integer, which is a whole number without a decimal (e.g., -40, 0, 42, 28308732). A float is a decimal floating-point number, which is any number with a decimal (e.g., 3.14159, -43.2, 1.0, 0.0). In Python, passing a variable name into the <code>type</code> function will return the type of the value the variable is currently storing.
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="pre-exercise-code">
	</code>
	<code data-type="sample-code">
		my_int = 1
		my_float = 1.0
		my_str = "1"

		# Print each variable type
		print(type(my_int))
		print(type(my_float))
		print(type(my_str))
	</code>
	<code data-type="solution">
		my_int = 1
		my_float = 1.0
		my_str = "1"

		# Print each variable type
		print(type(my_int))
		print(type(my_float))
		print(type(my_str))
	</code>
	<code data-type="sct">
		test_object("my_int")
		test_object("my_float")
		test_object("my_str")
		test_function("print")
		success_msg("Process complete")
	</code>
	<div data-type="hint">
		Just click "Run"
	</div>
</div>

<p>
Numbers, strings, and booleans all behave differently, so it's important to know the difference. For example, the string "42" is different than the integer 42, and both are different than the float 42.0. Similarly, the boolean False is different than the string "False". The following chapters will illustrate how the computer treats different variable types differently and what you as the programmer can do with different variable types.
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="pre-exercise-code">
	</code>
	<code data-type="sample-code">
		# Define an int named x with a value of 4
		
		# Define a float named y with a value of -12.34

		# Define a string named name with a value of "Bob"

		# Define a boolean named is_valid with a value of True

		# Print each variable value

		# Print each variable type
	</code>
	<code data-type="solution">
		# Define an int named x with a value of 4
		x = 4
		
		# Define a float named y with a value of -12.34
		y = -12.34

		# Define a string named name with a value of "Bob"
		name = "Bob"

		# Define a boolean named is_valid with a value of True
		is_valid = True

		# Print each variable value
		print(x)
		print(y)
		print(name)
		print(is_valid)

		# Print each variable type
		print(type(x))
		print(type(y))
		print(type(name))
		print(type(is_valid))
	</code>
	<code data-type="sct">
		test_object("x")
		test_object("y")
		test_object("name")
		test_object("is_valid")
		test_output_contains("4", False, "Output should show <code>4</code>")
		test_output_contains("-12.34", False, "Output should show <code>12.34</code>")
		test_output_contains("Bob", False, "Output should show <code>Bob</code>")
		test_output_contains("True", False, "Output should show <code>True</code>")
		test_output_contains("class 'int'", False, "Output should show type of <code>x</code>")
		test_output_contains("class 'float'", False, "Output should show type of <code>y</code>")
		test_output_contains("class 'str'", False, "Output should show type of <code>name</code>")
		test_output_contains("class 'bool'", False, "Output should show type of <code>is_valid</code>")
		success_msg("Now you know how to define variables and classify their types!")
	</code>
	<div data-type="hint">
		Print each variable value by using <code>print(<em>name</em>)</code>. Print each variable type by using <code>print(type(<em>name</em>))</code>.
	</div>
</div>
