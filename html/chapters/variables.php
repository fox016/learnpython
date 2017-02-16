<p>
As stated in the previous chapter, coding is writing commands for a computer to execute. Computers carry out commands by writing data to memory, reading data from memory, and performing calculations on that data. Programmers can tell a computer to write data to memory by defining <em>variables</em>. A variable is a name that is tied to a value. For example, the code <code>temperature = 32</code> assigns the number value <code>32</code> to the variable name <code>temperature</code>. Then you can use the variable name <code>temperature</code> throughout your code and it will be evaluated as the number value <code>32</code>. There are many types of values that can be assigned to variables. Common types of values include numbers (e.g., <code>42</code>, <code>3.14159</code>), strings of text (e.g., <code>"Hello, world!"</code>, <code>"Python is fun and easy to learn!"</code>), and booleans (<code>True</code> or <code>False</code>). Python assigns values to variable names using the following syntax:
</p>
<p>
	<code>my_num = 42</code><br/>
	<code>my_str = "Hello, world!"</code><br/>
	<code>my_bool = True</code><br/>
</p>
<p>
Use the exercise below to assing values to variable names. Read the comments in the provided code to see what values you should assign to each variable name.
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
Notice that variable names cannot contain spaces. For example, <code>employee age = 42</code> is <strong>not</strong> valid. To make variable names that are made of multiple words, programmers can use underscores (e.g., <code>employee_age = 42</code>) or camel case (e.g., <code>employeeAge = 42</code>). Python style guides suggest using underscores to separate chunks of multi-word variable names, but some other languages suggest camel case.
</p>

<h2>Variable Types</h2>

<p>
As previously mentioned, common types of variable values include numbers, strings, and booleans. Numbers are divided into different types, the two most common types being int and float. An int is an integer, which is a whole number without a decimal (e.g., <code>-40</code>, <code>0</code>, <code>42</code>, <code>28308732</code>). A float is a decimal floating-point number, which is any number with a decimal (e.g., <code>3.14159</code>, <code>-43.2</code>, <code>1.0</code>, <code>0.0</code>). In Python, passing a variable name into the <code>type</code> function will return the type of the value the variable is currently storing.
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="pre-exercise-code">
	</code>
	<code data-type="sample-code">
		var1 = 1 # integer ('int')
		var2 = 1.0 # float
		var3 = "1" # string ('str')
		var4 = True # boolean ('bool') 

		# Print each variable type
		print(type(var1))
		print(type(var2))
		print(type(var3))
		print(type(var4))

		# Print a sentence for each variable value and type
		# Don't mess with this code or worry about understanding it, it's just here to give you nice output
		print("var1 has a value of " + str(var1) + " and is of type " + str(type(var1)))
		print("var2 has a value of " + str(var2) + " and is of type " + str(type(var2)))
		print("var3 has a value of \"" + str(var3) + "\" and is of type " + str(type(var3)))
		print("var4 has a value of " + str(var4) + " and is of type " + str(type(var4)))
	</code>
</div>

<p>
Numbers, strings, and booleans all behave differently, so it's important to know the difference. For example, the string <code>"42"</code> is different than the integer <code>42</code>, and both are different than the float <code>42.0</code>. Similarly, the boolean <code>False</code> is different than the string <code>"False"</code>. The following chapters will illustrate how the computer treats different variable types differently and what you as the programmer can do with different variable types.
</p>

<h2>Review</h2>

<p>
Define integers using the following syntax: <code>int_name = 10</code><br/>
Define floats using the following syntax: <code>float_name = 10.0</code><br/>
Define strings using the following syntax: <code>str_name = "my string could beat up your string"</code><br/>
Define booleans using the following syntax: <code>bool_name = True</code><br/>
</p>
<p>
Print variable values using the following syntax: <code>print(<em>variable_name</em>)</code><br/>
Print variable types using the following syntax: <code>print(type(<em>variable_name</em>))</code><br/>
</p>

<p>
Use the exercise below to put all your newfound knowledge to the test!
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
