<p>
Writing code can be tricky. Some say that there is no non-trivial code that is completely error-free. Errors happen, and they happen frequently. Preventing, finding, and fixing errors (also known as <em>bugs</em>) in code are valuable skills for programmers to master. This chapter will cover three types of errors (syntax, semantic, and design) and discuss actions that programmers can take to prevent and fix these kinds of errors.
</p>

<h2>Syntax Errors</h2>

<p>
Syntax errors occur when the computer can't understand the code. It looks at the code, tries to make sense of it (i.e. tries to translate it into binary), but can't. This happens when the programmer doesn't stricly follow the rules of the programming language. Perhpas there was a typo or some misunderstanding of the language's syntax rules. Here are a few things you can do to prevent, find, and fix these errors:
</p>

<ul>
	<li><strong>Use a text editor with syntax highlighting</strong> - The Python editor that is featured in this textbook uses syntax highlighting. Keywords like <code>def</code>, <code>if</code>, and <code>print</code> show up in blue. Booleans are yellow. Strings are purple. Syntax highlighting helps you to prevent and find syntax errors. If something isn't the color you expect it to be, then there must be a syntax issue.</li>
	<li><strong>Run the code</strong> - When you try running code that has syntax errors, the output will often give you some kind of error message that you can use to find the error. These error messages aren't perfect and can sometimes be misleading, but they can often help you to know where to look to find syntax errors in your code.</li>
	<li><strong>Know the language</strong> - There is no replacement for spending time practicing and getting familiar with a programming language. The more you use a programming language, the more you know it, and you'll make fewer syntax errors as you become more and more accustomed to the syntax rules. Refer to the documentation for the programming language as you're learning to clear up your personal misunderstandings.</li>
</ul>

<p>
Each of the six test functions in the exercise below has a syntax error. Run the code, read the error message from the output, and find and fix the errors.
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
		deff test1():
			print("test 1 passed")

		def test2(message]:
			print("test 2 passed: " + message)

		def test3(message):
			prnit("test 3 passed: " + message)

		def test4()
			print("test 4 passed")

		def test5():
		print("test 5 passed")

		def test6(message):
			print("test 6 passed: " + message(0:4))

		# tests, don't change these
		test1()
		test2("success")
		test3("way to go!")
		test4()
		test5()
		test6("yay!!!!!")
	</code>
	<code data-type="solution">
		def test1():
			print("test 1 passed")

		def test2(message):
			print("test 2 passed: " + message)

		def test3(message):
			print("test 3 passed: " + message)

		def test4():
			print("test 4 passed")

		def test5():
			print("test 5 passed")

		def test6(message):
			print("test 6 passed: " + message[0:4])

		# tests, don't change these
		test1()
		test2("success")
		test3("way to go!")
		test4()
		test5()
		test6("yay!!!!!")
	</code>
	<code data-type="sct">
		test_output_contains("test 1 passed\ntest 2 passed: success\ntest 3 passed: way to go!\ntest 4 passed\ntest 5 passed\ntest 6 passed: yay!")
		success_msg("Great job!")
	</code>
	<div data-type="hint">
		Look at spelling, colons, brackets, parentheses, and tabs
	</div>
</div>

<h2>Semantic Errors</h2>

<p>
Semantic errors are often more difficult to find than syntax errors. Semantic errors occur when the computer understands the command, but it's not the command that the programmer intended. The computer understands and runs the code, and the programmer is left wondering why the program doesn't work as expected. These errors are difficult to find because the computer doesn't report them: you have to look through your code and find them on your own.
</p>

<p>
One example of a semantic error was discussed in the <a href='?chapter=strings'>strings chapter</a>: the error of concatenating numerical strings instead of adding numbers together. If you try <code>c = a + b</code> where <code>a</code> is 235 and <code>b</code> is 395, you might be surprised when <code>c</code> comes out to be 235395 instead of 630 because you didn't realize that <code>a</code> and <code>b</code> were numerical strings instead of ints.
</p>

<p>
Another common semantic error is related to misunderstanding the language's order of operations, also know as <em>operator precedence</em>. If you try <code>a = 2 + 4 * 6</code>, you may be surprised when <code>a</code> turns out to be 26 instead of 36 because the multiplcation is computed before the addition. The precedence of the <code>*</code> operator is higher than the precedence of the <code>+</code> operator, so it is executed first even though the <code>+</code> command comes first when reading left to right.
</p>

<p>
Other semantic errors may be caused by typos. You might want to do <code>a * b</code> but you accidentally type <code>a + b</code>. You might accidentally type the variable name <code>first_name</code> where you meant to use the variable <code>last_name</code>. When a typo results in code that the computer can understand and run, it is a semantic error rather than a syntax error.
</p>

<p>
Semantic errors can be tricky to find, but are usually easy to fix once found. Here are some tips for finding syntax errors:
</p>

<ul>
	<li><strong>Use print statements</strong> - Syntax errors often happen because you think you know the value or the type of a variable, but it's not what you think it is. Throw some <code>print(<em>var</em>)</code> and <code>print(type(<em>var</em>))</code> statements in your code so that you have a better idea of what the computer is doing with your variables. Once you find a variable that has a different value than you expected, trace your code back to where that variable was modified to figure out why it has that unexpected value.</li>
	<li><strong>Use debugging tools</strong> - If you are running Python on your own computer, you have the option of installing debugging tools for Python. Debugging tools help you to walk through your code step by step and see the values of the variables at each step.</li>
	<li><strong>Have someone review your code</strong> - Getting a fresh pair of eyes to look at your code might be a good way to find a semantic error. Explain your intentions to the reviewer as you walk through your code. The reviewer might catch something in your code that is causing the error.
</ul>

<h2>Design Errors</h2>

<p>
Syntax errors occur when the computer doesn't understand the code. Semantic errors occur when the code runs but doesn't reflect the programmer's intentions. Design errors occur when the code runs according to the programmer's intentions, but the programmer's intentions are somehow wrong. A programmer might start coding with wrong assumptions or might misunderstand what the customer wants, thus the programmer fails to design a program that solves the problem at hand. The best way to prevent and find design errors is through frequent communication. If you are writing code for a class assignment, talk to an instructor, a classmate, or a TA to make sure you really understand the assignment. Read over the assignment description multiple times throughout the process to make sure no detail is left out. If you are writing code for a customer, keep the customer involved throughout the whole process. Create mockups and documentation that communicate all decisions that are made throughout the project. It takes work to stay on the same page, but it pays off when at the end you know that your intentions are in line with the customer's or the instructor's.
</p>
