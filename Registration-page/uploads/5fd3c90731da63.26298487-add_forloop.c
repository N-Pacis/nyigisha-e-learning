#include <stdio.h>
int addition(int num1, int num2)
{
    return num1 + num2;
}
int subtraction(int num1, int num2)
{
    return num1 - num2;
}
int multiplication(int num1, int num2)
{
    return num1 * num2;
}
float division(float num1, float num2)
{
    return num1 / num2;
}

int main()
{
    int num1, num2, sum, sub, mul, i = 1, c = 1;
    float div;
    char option, option1, option2;
    printf("Do u want to use calculator:y/n \n");
    scanf("%c", &option);
    for (i; i > 0; i++)
    {
        if (option == 'y')
        {

            printf("Do u want to continue? y/n \n");
            scanf("%c", &option2);
            option2 = getchar();
            if (option2 == 'y')
            {
                printf("Enter the first number:\n");
                scanf("%d", &num1);
                printf("Enter the second number:\n");
                scanf("%d", &num2);
                printf("Choose operand you want to use:\n A(Addition)\t B(Subtraction)\t C(Multiplication)\t D(Division) : \n");
                scanf("%c", &option1);
                option1 = getchar();
                for (c; c > 0; c++)
                {
                    switch (option1)
                    {
                    case 'A':
                        sum = addition(num1, num2);
                        printf("The sum is %d \n", sum);
                        break;
                    case 'B':
                        sub = subtraction(num1, num2);
                        printf("The difference is %d \n", sub);
                        break;
                    case 'C':
                        mul = multiplication(num1, num2);
                        printf("The product is %d \n", mul);
                        break;
                    case 'D':
                        div = division(num1, num2);
                        printf("The division is %f \n", div);
                        break;
                    default:
                        printf("Invalid choice");
                    }
                    break;
                }
            }
            if (option2 == 'n')
            {
                break;
            }
            if (option == 'n')
            {
                printf("OK");
                break;
                return 0;
            }
        }
    }
}
