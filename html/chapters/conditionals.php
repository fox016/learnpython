<p>
Sometimes (a lot of the time, in fact) you may want to write code that is only executed if certain conditions are met. An online store, for example, will only want to send out a shipping order if the customer's credit card payment was accepted. An online banking system will only allow you to log in if the given password matches the given username. A university web application may check to make sure that a student was admitted and paid tuition before allowing the student to register for classes. In all of these cases, certain conditions must be met for certain processes to run. To program computers to behave like this, programmers must use <em>conditionals</em>. Note that the root of the word "conditionals" is "condition"; this is because the computer checks that the conditions are met before executing the code.
</p>

<h2>The If Statement</h2>

<p>
Conditionals in Python are based around the <code>if</code> statement. The syntax looks like this:
</p>
<p>
<code>if <em>condition</em>:</code>
</p>
<p>
where the <em>condition</em> is code that evaluates to a boolean (e.g., if True:, if False:, if 8&lt;9:, if age&gt;=18:, if username=="bob" and password=="tomato":). The code that runs if the condition is True starts on the following line and is tabbed in, just like the code of a function under its definition.
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
	if True:
		print("This will always print, because the condition is always True")

	if False:
		print("This will never print, because the condition is always False")

	age = 18 # you can change this
	if age >= 18:
		print("You are an adult. Move out and start paying bills. Congrats!")

	var1 = 259 # you can change this
	var2 = 624 # you can change this
	if var1 > var2:
		print(str(var1) + " is greater than " + str(var2))
	if var1 < var2:
		print(str(var2) + " is greater than " + str(var1))
	if var1 == var2:
		print(str(var2) + " is equal to " + str(var1))

	username = "bob" # you can change this
	password = "tomato" # you can change this
	if username == "bob" and password == "tomato":
		print("Login successful")
		print("Hello, " + username)

	</code>
</div>

<h2>The If-else Statement</h2>

<p>
There are also instances where you will want your program to do one thing if the condtion is met and another thing if it is not met. If a user enters an email address on your website before clicking "Submit", then add the email address to the email list. If the user clicks "Submit" without providing an email address, then show an error message telling the user to enter an email address before clicking "Submit". This is best done by using an if-else statement. After writing an if statement, write a line <code>else:</code>, and under that line write the code (tabbed in) that should be run if the condition in the original if statement is <strong>not</strong> true.
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
	is_email = False # True if user entered an email, False if user didn't
	
	if is_email:
		print("Email address successfully added to email list")
	else:
		print("Please enter an email address before clicking 'Submit'")
	</code>
</div>

<h2>The If-elif-else Statement</h2>

<p>
Now imagine a case where you want a user to input their age and you print a string like "You are a child", "You are in your teens", "You are in your twenties", "You are in your thirties", and so on. You want the program to print exactly one string for any given age, but there are more than two possible strings to print out, so a single if-else statement won't work on its own. In cases like this, you can use an if-elif-else statement. In an in-elif-else statement, the first condition that is true determines the code that the computer runs. Once one condition is true and the computer runs the code, the computer doesn't even look at the other conditions: it already found one, and it will only run one. That's because the "elif" stands for "else if"; it is only considered if the condition from the previous if or elif statement is false.
</p>

<p>
In the exercise below, the program starts by testing <code>age</code> against the first condition. If <code>age</code> is less than 13, the program prints "You are a child" and doesn't look at any of the other conditions. If <code>age = 9</code> then it will print out "You are a child" and stop, because it won't look at the next conditional (<code>age &lt; 18</code>) unless the first condition is false. Play around with the value of <code>age</code> in the exercise below to understand how if-elif-else statements work.
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
	def print_age(age):
		if age < 13:
			print("You are a child")
		elif age < 18:
			print("You are a teenager")
		elif age < 20:
			print("You are a young adult")
		elif age < 30:
			print("You are in your twenties")
		elif age < 40:
			print("You are in your thirties")
		elif age < 50:
			print("You are in your forties")
		elif age < 60:
			print("You are in your fifties")
		elif age < 70:
			print("You are in your sixties")
		elif age < 80:
			print("You are in your seventies")
		else:
			print("You are a senior citizen")

	print_age(32) # Change the input value to see the different messages
	</code>
</div>

<h2>Nesting Conditionals</h2>

<p>
In the world of programming, <em>nesting</em> means putting a statement inside of a similar statement. For conditionals, you can put an if-else statement inside of another if-else statement. The example below shows such a case. If the username and password are correct, then the code inside that conditional tests another conditional: Is the user an adult or a minor? This is an example of a nested if-else statement or a nested conditional.
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
		age = 18
		username = "bob"
		password = "tomato"

		if username == "bob" and password == "tomato":
			if age >= 18:
				print("Welcome, " + username + ". You are an adult.")
			else:
				print("Welcome, " + username + ". You are a minor.")
		else:
			print("Invalid username or password")
	</code>
</div>

<p>
It's time for a challenge. In the exercise below, fill out the code for the function <code>at_stoplight</code>. The function takes two inputs: <code>color</code> and <code>direction</code>. The <code>color</code> can be "red", "green", or "yellow". The <code>direction</code> can be "left", "right", or "straight". Make the function follow the following rules:
</p>
<ul>
	<li>If the color is "red" and the direction is "straight" or "left", return "stop"</li>
	<li>If the color is "red" and the direction is "right", return "turn after stopping if traffic is clear"</li>
	<li>If the color is "yellow", return "prepare to stop"</li>
	<li>If the color is "green" and the direction is "straight" or "right", return "procede with caution"</li>
	<li>If the color is "green" and the direction is "left", return "turn if traffic is clear"</li>
	<li>If the color is not one of these three colors, return "error: invalid color"</li>
</ul>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
		# function at_stoplight
		# input - color (red, green, yellow), direction (left, right, straight)
		# return correct instructions
		def at_stoplight (color, direction):
			pass # delete this line and write your code

		# tests (do not change)
		print(at_stoplight("red", "left"))
		print(at_stoplight("red", "right"))
		print(at_stoplight("red", "straight"))
		print(at_stoplight("green", "left"))
		print(at_stoplight("green", "right"))
		print(at_stoplight("green", "straight"))
		print(at_stoplight("yellow", "left"))
		print(at_stoplight("yellow", "right"))
		print(at_stoplight("yellow", "straight"))
	</code>
	<code data-type="solution">
		# function at_stoplight
		# input - color (red, green, yellow), direction (left, right, straight)
		# return - correct instructions
		def at_stoplight (color, direction):
			if color == "red":
				if direction == "right":
					return "turn after stopping if traffic is clear"
				else:
					return "stop"
			elif color == "green":
				if direction == "left":
					return "turn if traffic is clear"
				else:
					return "procede with caution"
			elif color == "yellow":
				return "prepare to stop"
			else:
				return "error: invalid color"

		# tests (do not change)
		print(at_stoplight("red", "left"))
		print(at_stoplight("red", "right"))
		print(at_stoplight("red", "straight"))
		print(at_stoplight("green", "left"))
		print(at_stoplight("green", "right"))
		print(at_stoplight("green", "straight"))
		print(at_stoplight("yellow", "left"))
		print(at_stoplight("yellow", "right"))
		print(at_stoplight("yellow", "straight"))
	</code>
	<code data-type="sct">
		test_output_contains("stop\nturn after stopping if traffic is clear\nstop\nturn if traffic is clear\nprocede with caution\nprocede with caution\nprepare to stop\nprepare to stop\nprepare to stop", False, "Incorrect output")
		success_msg("Great job!")
	</code>
	<div data-type="hint">
		First use if-elif-else statements for the different colors (if color == "red", elif color == "green", elif color == "yellow", else). You may need to nest conditionals inside of those conditionals to deal with the direction.
	</div>
</div>
