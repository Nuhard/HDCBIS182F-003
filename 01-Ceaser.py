rs = ''
choice = ''
msg = ''

while choice != 0:
    choice = input("\n Do you want to encrypt or decrypt the message?\n A to encrypt   B to decrypt  C to exit program. ")

    if choice == 'A':
        msg = input('\nEnter message for encryption: ')
        for i in range(0, len(msg)):
            rs = rs + chr(ord(msg[i]) - 3)

        print(rs + '\n\n')
        rs = ''

    if choice == 'B':
        msg = input('\nEnter message to decrypt: ')
        for i in range(0, len(msg)):
            rs= rs+ chr(ord(msg[i]) + 3)

        print(rs + '\n\n')
        rs = ''

    elif choice != 'C':
        print('You have entered an invalid input, please try again. \n\n')
