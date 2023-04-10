import hashlib

def generate_token(college_name: str, unique_id: str) -> str:
    # concatenate college name and unique ID
    data = college_name + unique_id
    
    # hash the data using SHA-256 algorithm
    hashed_data = hashlib.sha256(data.encode()).hexdigest()
    
    # take the first 8 characters of the hashed data
    token = hashed_data[:4]
    
    # return the token
    return token

# Example usage
college_name = input("Enter college name: ")
unique_id = input("Enter college unique ID: ")
token = generate_token(college_name, unique_id)
print("Generated token:", token)
